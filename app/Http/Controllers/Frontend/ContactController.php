<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Check for honeypot field to prevent spam
        if (!empty($request->input('_honey'))) {
            // Silently ignore spam submissions
            return $request->ajax() ? response('OK', 200) : redirect()->back()->with('success', 'Your message has been sent. Thank you!');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response($validator->errors()->first(), 200);
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();

        try {
            Mail::to('contact@ggg24.services')->queue(new ContactMessage($validatedData));
            
            if ($request->ajax()) {
                return response('OK', 200);
            }
            return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
        } catch (\Exception $e) {
            \Log::error('Contact form submission failed: ' . $e->getMessage());
            
            if ($request->ajax()) {
                return response('Sorry, there was an error sending your message. Please try again later.', 200);
            }
            return redirect()->back()->with('error', 'Sorry, there was an error sending your message. Please try again later.');
        }
    }
}
