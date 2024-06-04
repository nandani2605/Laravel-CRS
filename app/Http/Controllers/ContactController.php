<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ContactMailJob;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    protected $contact;

    public function __construct(
        Contact $contact,
    ) {
        $this->contact = $contact;
    }

    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'number'  => 'required', // Adjust the max length to match the database schema
            'email'   => 'required|string',
            'subject' => 'required|string|max:255',
            'body'    => 'required|string',
        ]);

        $contact = $this->contact->createContactDetail($validatedData);

            $data = $request->only(['name', 'number', 'email', 'subject', 'body']);
            Mail::to($data['email'])->queue(new ContactMail($data));
            dispatch(new ContactMailJob($data));
            return back()->with('success', 'Message sent successfully.');
    }
}
