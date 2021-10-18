<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function index()
    {
        $users = User::all();
      return view('task.create',compact('users'));
    }
    public function store(Request $request)
    {
     
        foreach ($request->users as $key => $v) {
            $task = new Task();
            $task->name = $request->task;
            $task->user_id = $v;
            $task->scheduleTime = $request->date;
            $task->save();
        }
        return 'done';
    }
}
