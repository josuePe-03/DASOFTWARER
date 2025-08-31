<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Models\EmailSetting;

class EmailService
{
    protected $config;

    public function __construct($mailer = 'resend')
    {
        // Tomamos la configuración guardada para Resend
        $this->config = EmailSetting::where('mailer', $mailer)->first();
    }

    public function send($to, $mailable)
    {
        if (!$this->config) {
            throw new \Exception("No hay configuración de correo para este mailer.");
        }

        // Configuración temporal para Resend
        config([
            'mail.default' => 'dynamic',
            'mail.mailers.dynamic' => [
                'transport' => 'resend',
                'api_key' => $this->config->api_key,
            ],
            'mail.from.address' => $this->config->from_address,
            'mail.from.name' => $this->config->from_name,
        ]);

        return Mail::mailer('dynamic')->to($to)->send($mailable);
    }
}
