<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ContactMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $data;
    /**
     * Create a new job instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
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
            $mail->addAddress($this->data['email']);

            // Content
            $mail->isHTML(true);
            $mail->Subject = "Thank you for visiting this website!!!";
            $bodyContent = "
                <p>Dear {$this->data['name']}</p>
                <p><strong>Number:</strong> {$this->data['number']}</p>
                <p><strong>Email:</strong> {$this->data['email']}</p>
                <p><strong>Subject:</strong> {$this->data['subject']}</p>
                <p><strong>Message:</strong></p>
                <p>{$this->data['body']}</p>
            ";
            $mail->Body = $bodyContent;

            $mail->send();
        } catch (Exception $e) {
            Log::error('Exception: ' . $e->getMessage());
        }
    }
}
