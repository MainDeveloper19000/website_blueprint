<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TelegramController extends Controller
{
    public function sendToTelegram(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:191',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:250',

        ]);

        $message = "=====================Support==================\n";
        $message .= "Name: " . $request->input('name') . "\n";
        $message .= "Email: " . $request->input('email') . "\n";
        $message .= "Phone: " . $request->input('phone') . "\n";
        $cate = $request->input('cate');
        if ($cate == 1) {
            $message .= "Ask about: Bitrix24\n";
        } elseif ($cate == 2) {
            $message .= "Ask about: Respond.io\n";
        } else {
            $message .= "Ask about: Unknown category\n";
        }
        $message .= "Message: " . $request->input('message');

        $telegramBotToken = '7124501996:AAF667Ww1sLpkmcnhwdZYp5DtW6NrqwlAzs';
        $chatId = 1204310951;

        $response = Http::post("https://api.telegram.org/bot{$telegramBotToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $message,
        ]);
        Log::info($telegramBotToken);
        if ($response->successful()) {
            return back()->with('success', 'Message sent to Telegram successfully!');
        } else {
            $errorMessage = $response->json('description', 'Failed to send message to Telegram.');
            return back()->with('error', $errorMessage);
        }
    }


    // contact telegram send controller 

    public function sendToTelegramContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:191',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:250',

        ]);

        $message = "=====================Contacts==================\n";
        $message .= "Name: " . $request->input('name') . "\n";
        $message .= "Email: " . $request->input('email') . "\n";
        $message .= "Phone: " . $request->input('phone') . "\n";
        $cate = $request->input('cate');
        if ($cate == 1) {
            $message .= "Ask about: Bitrix24\n";
        } elseif ($cate == 2) {
            $message .= "Ask about: Respond.io\n";
        } else {
            $message .= "Ask about: Unknown category\n";
        }
        $message .= "Message: " . $request->input('message');

        $telegramBotToken = '7124501996:AAF667Ww1sLpkmcnhwdZYp5DtW6NrqwlAzs';
        $chatId = 1204310951;

        $response = Http::post("https://api.telegram.org/bot{$telegramBotToken}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $message,
        ]);
        Log::info($telegramBotToken);
        if ($response->successful()) {
            return back()->with('success', 'Message sent to Telegram successfully!');
        } else {
            $errorMessage = $response->json('description', 'Failed to send message to Telegram.');
            return back()->with('error', $errorMessage);
        }
    }




}


