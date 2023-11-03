<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WuShuuWa extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'use:wu-shuu-wa {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'hello world';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        printf($this->argument("user"));
    }
}
