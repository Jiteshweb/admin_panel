<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Update;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class ClientUpdateTaskController extends Controller
{
    //
    public function addTask(Request $request)
    {
        try {
            if ($request->Session()->has('user')) {
                $task = new Task();
                $task->user_id = $request->Session()->get('user')['id'];
                $task->assignee = $request->assignee;
                $task->task = $request->task;
                $task->save();

                return back()->with('success', 'task added successfully');
            }
        } catch (\Exception $e) {
            return back()->with('warning', 'Somthing went wrong');
        }
    }
    public function showTasks()
    {
        // $data = 'hello';
        $data = Task::latest()->limit(5)->get();
        $task = Task::latest()->limit(4)->get();
        $update = Update::limit(4)->get();
        return view('sidbar-pages.dashboard.dashboard-2', [
            'admin' => $data,
            'updates' => $task,
            'status' => $update
        ]);


    }
    public function status(Request $request)
    {
        // return $request;
        try {
            if ($request->session()->has('user')) {
                $update = new Update(); // Assuming "Update" is your model
                $update->user_id = $request->Session()->get('user')['id'];
                $update->task_id = $request->task_id;
                $update->status = $request->status;
                $update->save();

                return back()->with('success', 'Status updated successfully');
            }

        } catch (\Exception $e) {
            return back()->with('warning', 'Something went wrong');
        }
    }
  

}


