<?php

namespace App\Console\Commands;

use App\Models\Student;
use Illuminate\Console\Command;

class Expiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'student:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'expire login after 2 logins';

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
     * @return int
     */
    public function handle()
    {
        $students = Student::all();
        foreach($students as $student){
            $student->update(['count_login'=>0]);
        }
    }
}
