<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailSetting;
use App\Services\EmailService;
use App\Mail\TestEmail;


class EmailSettingController extends Controller
{
    public function index()
    {
        // Obtenemos la primera configuración (puedes cambiar la lógica si quieres otra)
        $setting = EmailSetting::first();
        return view('email_settings.index', compact('setting'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mailer' => 'required|string',
            'from_address' => 'required|email',
            'from_name' => 'required|string',
            'api_key' => 'required|string',
        ]);

        // updateOrCreate busca el registro por la clave 'id' y lo actualiza, si no existe lo crea
        EmailSetting::updateOrCreate(
            ['id' => 1], // criterio para encontrar el registro
            [
                'mailer' => $request->mailer,
                'from_address' => $request->from_address,
                'from_name' => $request->from_name,
                'api_key' => $request->api_key
            ]
        );

        return redirect()->back()->with('success', 'Configuración guardada correctamente.');
    }
    // Enviar correo de prueba

    public function sendTest(Request $request)
    {
        $request->validate([
            'test_email' => 'required|email',
        ]);

        try {
            $emailService = new EmailService('resend');
            $emailService->send($request->test_email, new TestEmail());

            return redirect()->back()->with('success', 'Correo de prueba enviado correctamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al enviar correo: ' . $e->getMessage());
        }
    }


}
