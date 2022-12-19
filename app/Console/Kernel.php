<?php

namespace App\Console;

use App\Models\SertifikatIUP;
use App\Notifications\DeadlineNotification;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $dataSertifikatIUP = SertifikatIUP::where('tanggal_berakhir', '>', now())->get();
            foreach ($dataSertifikatIUP as $sertifikat) {
                if ($sertifikat->tanggal_berakhir->diffInDays(now()) < 7) {
                    Notification::send($sertifikat, new DeadlineNotification());
                }
            }
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
