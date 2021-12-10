<?php

namespace App\Jobs;

use Mail;
use App\Mail\HelloEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ComplaintSendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::send([],[], function ($messages) use($email,$complaint) {
            $messages->to($email);
            $messages->subject('Complaint Resolved');
            $messages->setBody('Your Complaint No # '.$complaint.' Is Resolved');
        });

    
    }
}
