<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
    }

    /**
<<<<<<< HEAD
     * Register the Closure based commands for the application.
=======
     * Register the commands for the application.
>>>>>>> f0fe922445c2344da58c72c0a2dbd64b1195f006
     *
     * @return void
     */
    protected function commands()
    {
<<<<<<< HEAD
=======
        $this->load(__DIR__.'/Commands');

>>>>>>> f0fe922445c2344da58c72c0a2dbd64b1195f006
        require base_path('routes/console.php');
    }
}
