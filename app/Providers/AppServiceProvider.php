<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use App\Models\EmailSetting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Forzar HTTPS en producción
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // Configuración dinámica de correo desde la base de datos
        $setting = EmailSetting::where('mailer', 'resend')->first();

        if ($setting) {
            // Configurar remitente
            config([
                'mail.from.address' => $setting->from_address,
                'mail.from.name' => $setting->from_name,
            ]);

            // Cambiar el mailer por default a 'resend'
            config(['mail.default' => 'resend']);
        }
    }
}
