<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ContactMailJob;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|numeric',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $data = $request->only(['name', 'number', 'email', 'subject', 'body']);
        Mail::to($data['email'])->queue(new ContactMail($data));
        // Dispatch the job
        dispatch(new ContactMailJob($data));
        return back()->with('success', 'Message sent successfully.');
    }
}
