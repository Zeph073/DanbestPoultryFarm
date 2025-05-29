<?php

namespace App\Http\Controllers;

use App\Mail\ContactFeedBack;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'telephone' => 'required|max:255',
                'message' => 'required|string',
                'subject' => 'required|string',
            ]);
            $data['data'] = $validatedData;
            $subject='Booking Inquiry';
            $message = view('emails.contact',$data);

            $headers = "From: " . $validatedData['email'] . "\r\n";
            $headers .= "Reply-To: ". $validatedData['email'] . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


            mail(config('licence.mailFromAddress'), $subject, $message,$headers);

            $replyMessage = view('emails.reply-message',$data);

            $headersReply = "From: " . config('licence.mailFromAddress') . "\r\n";
            $headersReply .= "Reply-To: ". config('licence.mailFromAddress') . "\r\n";
            $headersReply .= "MIME-Version: 1.0\r\n";
            $headersReply .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $success = mail($validatedData['email'], $subject, $replyMessage,$headersReply);
            if ($success) {
                return redirect()->back()->with('success', 'Your message has been sent successfully!');
            }
            return redirect()->back()->withInput()->with('error', 'Failed to send message! Use a valid email address.');

        }catch (\Exception $exception){
            return redirect()->back()->withInput()->with('error', 'Failed to send message. Try again!'. $exception->getMessage());
        }
    }

    public function sendMail(Request $request)
    {
        // Get data from the request
        try {
            $data = $request->validate([
                'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@([a-zA-Z0-9.-]+\.)?[a-zA-Z]{2,}$/',
                'message' => 'required|max:1000|not_regex:/http/i', // Blocks links
                'name' => 'required|string',
                'subject' => 'required|string',
                'telephone' => 'required|max:10|min:10', // Phone number only
                #'g-recaptcha-response' => 'required|captcha'
            ]);
            if (!empty($request->robotCheck)) {
                abort(403, 'Spam detected');
            }
            // Get the recipient email from the request or use a fallback
            $recipientEmail = env('MAIL_FROM_ADDRESS','info@danbestpoultyfarm.co.ke'); // Replace with default or dynamic email

            // Send email to the recipient
            Mail::to($recipientEmail)->send(new ContactUs($data));

            // Flash success message
            Session::flash('success', 'Your email message has been sent successfully.');

            // Optionally send a feedback email
            $this->sendFeedBackMail($request);

            return back();
        } catch (\Exception $e) {
            // Handle error
            Session::flash('error', 'Something went wrong. Please try again.');
            Session::flash('error', $e->getMessage());

            return back()->withInput();
        }
    }
    private function sendFeedBackMail($request){
        //get data from request
        try {
            $data = $request->validate([
                'email' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@([a-zA-Z0-9.-]+\.)?[a-zA-Z]{2,}$/',
                'message' => 'required|max:1000|not_regex:/http/i', // Blocks links
                'name' => 'required|string',
                'subject' => 'required|string',
                'telephone' => 'required|max:10|min:10', // Phone number only
                #'g-recaptcha-response' => 'required|captcha'
            ]);
            if (!empty($request->robotCheck)) {
                abort(403, 'Spam detected');
            }
            // Get the recipient email from the request or use a fallback
            $recipientEmail = $data['email']; // Replace with default or dynamic email
            // Send email to the recipient
            return Mail::to($recipientEmail)->send(new ContactFeedBack($data));
        }catch (\Exception $e){
            Session::flash('error', 'Something went wrong. Please try again.');
            Session::flash('error', $e->getMessage());
            return back()->withInput();
        }

    }
}
