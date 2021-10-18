<?php

namespace App\Observers;

use App\Models\Task;
use App\Models\User;

class TaskObserver
{
    /**
     * Handle the Task "created" event.
     *
     * @param  \App\Models\Task  $task
     * @return void
     */
    public function created(Task $task)
    {
      
        $user = User::find($task->user_id);
    
        $details = [
            'title' => 'Mail from jogi.amu@gmail.com',
            'body' => 'This is for testing email using smtp',
            'email'=>  $user->email,
            'time'=>  $task->scheduleTime,
        ];
       
        \Mail::to($user->email)->send(new \App\Mail\MyTestMail($details));
        echo 'Created';
    }

    /**
     * Handle the Task "updated" event.
     *
     * @param  \App\Models\Task  $task
     * @return void
     */
    public function updated(Task $task)
    {
        //
    }

    /**
     * Handle the Task "deleted" event.
     *
     * @param  \App\Models\Task  $task
     * @return void
     */
    public function deleted(Task $task)
    {
        //
    }

    /**
     * Handle the Task "restored" event.
     *
     * @param  \App\Models\Task  $task
     * @return void
     */
    public function restored(Task $task)
    {
        //
    }

    /**
     * Handle the Task "force deleted" event.
     *
     * @param  \App\Models\Task  $task
     * @return void
     */
    public function forceDeleted(Task $task)
    {
        //
    }
}
