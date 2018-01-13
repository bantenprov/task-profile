<?php namespace Bantenprov\TaskProfile\Console\Commands;

use Illuminate\Console\Command;

/**
 * The TaskProfileCommand class.
 *
 * @package Bantenprov\TaskProfile
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TaskProfileCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:task-profile';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\TaskProfile package';

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
        $this->info('Welcome to command for Bantenprov\TaskProfile package');
    }
}
