<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class SendMailController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // Validate form input
        $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|numeric',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = 0; // Change to 2 for detailed debug output
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
           
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port = env('MAIL_PORT');

            // Recipients
            $mail->setFrom('no-reply@gmail.com', 'Laravel');
            $mail->addAddress($request->email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = $request->subject;
            $mail->Body    = $request->body;

            if (!$mail->send()) {
                return back()->with("error", "Email not sent.")->withErrors($mail->ErrorInfo);
            } else {
                return back()->with("success", "Email has been sent.");
            }

        } catch (Exception $e) {
            return back()->with('error', 'Message could not be sent.')->withErrors($e->getMessage());
        }
    }
}
