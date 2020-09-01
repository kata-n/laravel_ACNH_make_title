<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Title_Card;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\AutoCommand::class,
        \App\Console\Commands\AutoRetweetCommand::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule
        ->command('command:title_maiking')
        ->withoutOverlapping()
        ->twiceDaily(18, 21);

        $schedule
        ->command('command:auto_retweet')
        ->withoutOverlapping()
        ->dailyAt('19:00');

        //1ヶ月前のものはテーブルから削除する
        $schedule
        ->call(function(){
          Title_Card::query()
          ->where('created_at','<',date("Y-m-d", strtotime("-30 day")))->delete();
        })->monthly('13:05');

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
