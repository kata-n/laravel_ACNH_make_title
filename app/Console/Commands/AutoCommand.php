<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\TittleMakeController;

class AutoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:title_maiking';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'maiking acnh title';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        TittleMakeController::making();
    }
}
