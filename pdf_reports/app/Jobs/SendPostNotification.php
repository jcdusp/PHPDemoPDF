<?php

namespace App\Jobs;



use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Mail;
use App\Mail\PostNotification;
use App\Models\Student;

class SendPostNotification implements ShouldQueue
{
    use Queueable,Dispatchable,InteractsWithQueue,SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        $student=Student::get();
        foreach($student as $student)
        {
            Mail::to($student->email)->send(new PostNotification());
        }
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
    }
}
