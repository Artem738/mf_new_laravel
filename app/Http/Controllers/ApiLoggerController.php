<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ApiLoggerController extends Controller
{
    public function logMessage(Request $request)
    {
        $message = $request->input('message');
        $timestamp = now()->format('Y-m-d_H-i-s.u'); // Формат с миллисекундами
        $filename = "log_{$timestamp}.txt";
        $path = storage_path("logs/{$filename}");
        
        File::put($path, $message);

        return response()->json(['status' => 'Message logged successfully'], 200);
    }
}
