<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Check for honeypot field to prevent spam
        if (!empty($request->input('_honey'))) {
            // Silently ignore spam submissions
            return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            Mail::to('contact@ggg24.services')->send(new ContactMessage($validatedData));
            return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
        } catch (\Exception $e) {
            \Log::error('Contact form submission failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Sorry, there was an error sending your message. Please try again later.');
        }
    }
}
