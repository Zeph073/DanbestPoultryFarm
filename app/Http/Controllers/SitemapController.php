<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class SitemapController extends Controller
{
    public function index()
    {
        $baseUrl = env('APP_URL');

        // Define excluded URLs or URL patterns
        $excludedUrls = [
            'home',
            'login',
            'register',
            'password/reset',
            'password/email',
            'api/user',
            'api/tell-us-about-your-project',
            'api/domain-checker',
            'api/register-domain',
            'api/transfer-domain',
            'api/test-api',
            'api/whmcs/products-by-group',
            'logout',
            '_ignition/update-config',
            '_ignition/execute-solution',
            '_ignition/health-check',
            'sanctum/csrf-cookie',
            'dashboard',
            'admin',  // Exclude everything under /admin
            'profile',
            'cart',
            'checkout',
            'domains-agreement',
            'privacy-policy',
            'data-policy',
            'hosting-agreement',
            'cancellation-policy',
            'webappdev-agreement',
            'cookies-policy',
            'portal',
            'user-profile',
            'users',
            'register-users',
            'email-verify',
            'appointments',
            'update-status',
            'seo-settings',
            'submit-bing-seo',
            'accept-cookies',
            'terminal',
            'cli-command',
        ];

        // Get all registered routes
        $routes = Route::getRoutes();
        $urls = [];

        foreach ($routes as $route) {
            $uri = ltrim($route->uri(), '/'); // Remove leading slash

            // Check if the URL matches any excluded pattern
            if ($this->isExcluded($uri, $excludedUrls)) {
                continue;
            }

            // Construct the URL
            $urls[] = [
                'loc' => URL::to($uri),
                'priority' => 0.8,
                'lastmod' => Carbon::now()->toAtomString(),
                'changefreq' => 'weekly',
            ];
        }

        // Generate XML
        $xml = $this->generateSitemap($urls);

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }

    /**
     * Check if a URL should be excluded
     */
    private function isExcluded($uri, $excludedUrls)
    {
        foreach ($excludedUrls as $excluded) {
            if (str_starts_with($uri, $excluded)) {
                return true;
            }
        }
        return false;
    }


    private function generateSitemap($urls)
    {
        $filePath = public_path('sitemap.xml');

        // Delete the existing sitemap file to regenerate it
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        // Create a new XML sitemap
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset/>');
        $xml->addAttribute('xmlns', 'https://www.sitemaps.org/schemas/sitemap/0.9');

        foreach ($urls as $url) {
            $urlTag = $xml->addChild('url');
            $urlTag->addChild('loc', $url['loc']);
            $urlTag->addChild('lastmod', $url['lastmod']);
            $urlTag->addChild('changefreq', $url['changefreq']);
            $urlTag->addChild('priority', $url['priority']);
        }

        // Write the sitemap XML to the file
        File::put($filePath, $xml->asXML());

        // Return the newly generated XML as a response
        return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
    }

    public function submitToIndexNow()
    {
        try {
            // Step 1: Load the sitemap.xml
            $sitemapPath = public_path('sitemap.xml');
            if (!file_exists($sitemapPath)) {
                return redirect()->back()->with('error', 'Sitemap file not found.',);
            }

            $sitemap = simplexml_load_file($sitemapPath);

            // Step 2: Extract all URLs from the sitemap
            $urlList = [];
            foreach ($sitemap->url as $url) {
                $urlList[] = (string)$url->loc;
            }

            // Step 3: Prepare the payload for IndexNow
            $payload = [
                "host" => env('APP_URL'), // Replace with your host
                "key" => env('BING_KEY'), // Replace with your key
                "keyLocation" => env('APP_URL') . '/' . env('BINK_KEY_LOCATION'), // Replace with your key location
                "urlList" => $urlList,
            ];

            // Step 4: Send the POST request to IndexNow
            $response = Http::withHeaders([
                'Content-Type' => 'application/json; charset=utf-8',
            ])->post('https://api.indexnow.org', $payload);

            // Step 5: Handle the response
            if ($response->successful()) {
                return redirect()->back()->with([
                    'success' => 'Your URLs has been submitted successfully!',
                    'details' => $response
                ]);
            }
            return redirect()->back()->with([
                'error' => 'Failed to submit URLs!',
                'details' => $response
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'error' => 'An error occurred!',
                'details' => $e->getMessage()
            ]);
        }
    }

    public function seoSettings()
    {
        // Display seo settings
        return view('admin.seo.seo');
    }
    public function generateRobotsFile(Request $request){
        $disallowedRoutes = [
            'domains-agreement',
            'privacy-policy',
            'data-policy',
            'hosting-agreement',
            'cancellation-policy',
            'webappdev-agreement',
            'cookies-policy',
            'portal', // Block portal as well
            'admin', // Block admin as well
        ];

        $rules = "User-agent: *\n";

        // Disallow specified routes
        foreach ($disallowedRoutes as $route) {
            $rules .= "Disallow: /$route\n";
        }

        // Allow all other routes
        $rules .= "Allow: /\n";

        // Add Sitemap URL
        $rules .= "Sitemap: " . url('/sitemap.xml') . "\n";

        return response($rules, 200)->header('Content-Type', 'text/plain');

    }
}
