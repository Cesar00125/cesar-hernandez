<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        // Procesa los datos del webhook
        $payload = $request->all();
        
        // Log para depuración (opcional)
        Log::info('Webhook recibido:', $payload);

        // Realiza acciones según el payload

        return response()->json(['message' => 'Webhook procesado correctamente'], 200);
    }
}
