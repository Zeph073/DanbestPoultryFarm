<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the email
        $validated = $request->validate([
            'email' => 'required|email'
        ]);

        $email = $validated['email'];

        // Send an email notification to the admin
        Mail::raw("New newsletter subscription from: $email", function ($message) use ($email) {
            $message->to('info@danbestpoultyfarm.co.ke')
                ->subject('New Newsletter Subscription');
        });

        // Optionally: Log or store email to DB

        return back()->with('success', 'Thank you for subscribing!');
    }
}
