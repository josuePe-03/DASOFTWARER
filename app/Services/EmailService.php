<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Models\EmailSetting;

class EmailService
{
    protected $config;

    public function __construct($mailer = null)
    {
        $this->config = EmailSetting::where('mailer', $mailer ?? 'resend')->first();
    }

    public function send($to, $mailable)
    {
        if (!$this->config) {
            throw new \Exception("No hay configuración de correo para este mailer.");
        }

        config([
            'mail.mailers.dynamic' => [
                'transport' => $this->config->mailer,
                'api_key' => $this->config->api_key,
            ],
            'mail.from.address' => $this->config->from_address,
            'mail.from.name' => $this->config->from_name,
        ]);

        return Mail::mailer('dynamic')->to($to)->send($mailable);
    }
}
