<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\SendNotification;
use Illuminate\Support\Facades\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class KirimNotifikasiController extends Controller
{
    public function index()
    {
        return Notification::send(null, new SendNotification());
    }
}
