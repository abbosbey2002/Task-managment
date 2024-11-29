<?php

namespace App\Console;

use App\Services\TaskService;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Task notification scheduler
        $schedule->call(function () {
            app(TaskService::class)->notifyPendingTasks();
        })->everyMinute();  // Har bir daqiqada ishlaydi

        // Custom Artisan command scheduler
        $schedule->command('inspire')->hourly();  // Har soatda ishlaydi
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');
        require base_path('routes/console.php');
    }
}
