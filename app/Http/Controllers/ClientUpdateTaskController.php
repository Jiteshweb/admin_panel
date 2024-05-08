<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Session;

class ClientUpdateTaskController extends Controller
{
    //
    public function addTask(Request $request)
    {
        if ($request->Session()->has('user')) {
            $task = new Task();
            $task->user_id = $request->Session()->get('user')['id'];
            $task->task = $request->task;
            $task->save();

            return back()->with('message', 'task added successfully');
        }
    }
    public function showTasks()
    {
        // $data = 'hello';
        $data = Task::latest()->limit(5)->get();
        return view('sidbar-pages.dashboard.dashboard-2',['admin'=>$data]);
    }
    public function loadMore(Request $request)
    {
        $page = $request->input('page');
        $limit = 10; // Number of tasks to load per page

        // Fetch tasks for the specified page
        $tasks = Task::skip(($page - 1) * $limit)
                    ->take($limit)
                    ->get();

        return response()->json($tasks);
    }
}


