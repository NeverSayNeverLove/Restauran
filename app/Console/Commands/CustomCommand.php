<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CustomCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reset_time_working';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cap nhat lai thong tin cua stylist vao ngay tiep theo';

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
        //
    }
}
