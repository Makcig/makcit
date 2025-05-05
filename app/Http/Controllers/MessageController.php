<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewMessageNotification;
use Google\Auth\CredentialsLoader;
use Google\Auth\OAuth2;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MessageController extends Controller
{
    // Method to display the form
    public function create()
    {
        return view('contact');
    }

    // Method to save the message
    public function store(Request $request)
    {
        // Data validation
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $RECAPTCHA_SITE_KEY = env('RECAPTCHA_SITE_KEY');
        $RECAPTCHA_API_KEY = env('RECAPTCHA_API_KEY');

        $response = Http::post("https://recaptchaenterprise.googleapis.com/v1/projects/makcit-1730374519771/assessments?key={$RECAPTCHA_API_KEY}", [
            'event' => [
                'token' => $request->input('g-recaptcha-response'),
                'siteKey' => $RECAPTCHA_SITE_KEY,
                'expectedAction' => 'submit',
            ],
        ]);


        $responseData = $response->json();

        Log::info('reCAPTCHA Response:', $responseData);

        // Check if the response from the API contains tokenProperties and riskAnalysis keys
        if (!isset($responseData['tokenProperties']) || !isset($responseData['riskAnalysis'])) {
            return redirect()->back()->withErrors(['captcha' => 'Error reCAPTCHA: wrong response from Google.']);
        }

        if (!$responseData['tokenProperties']['valid'] || $responseData['riskAnalysis']['score'] < 0.5) {
            return redirect()->back()->withErrors(['captcha' => 'reCAPTCHA verification failed.']);
        }

        // Save the message to the database
        $message = Message::create($validated);

        // Send email notification
        Mail::to('niidel@gmail.com')->send(new NewMessageNotification($message));

        // Redirect with a success notification
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
