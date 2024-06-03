<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function showForm(Request $request)
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

        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port = env('MAIL_PORT');

            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress($request->email);

            // Content

            $mail->isHTML(true);
            $mail->Subject = "Thank you for visiting this website!!!";
            $bodyContent = "
                <p><strong>Name:</strong> {$request->name}</p>
                <p><strong>Number:</strong> {$request->number}</p>
                <p><strong>subject:</strong></p>
                <p>{$request->subject}</p>
                <p><strong>Message:</strong></p>
                <p>{$request->body}</p>
            ";
            $mail->Body = $bodyContent;

            if (!$mail->send()) {
                Log::error('Mailer Error: ' . $mail->ErrorInfo);
                return back()->with('error', 'Email not sent.')->withErrors($mail->ErrorInfo);
            } else {
                return back()->with('success', 'Email sent successfully.');
            }
        } catch (Exception $e) {
            Log::error('Exception: ' . $e->getMessage());
            return back()->with('error', 'Message could not be sent. Please check the log for more details.');
        }
    }
}
