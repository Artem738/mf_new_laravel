<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ApiLoggerController extends Controller
{
    public function logMessage(Request $request)
    {
        $message = $request->input('message');
        $timestamp = now()->format('Y-m-d H:i:s.u'); // Формат с миллисекундами
        $logEntry = "[$timestamp] $message" . PHP_EOL;
        $logFilePath = storage_path('logs/flutter.log');

        File::append($logFilePath, $logEntry);

        return response()->json(['status' => 'Message logged successfully'], 200);
    }
}
