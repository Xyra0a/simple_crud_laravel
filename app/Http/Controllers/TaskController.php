<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller {
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::all()
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {

        $tasks_data = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Task::create($tasks_data);

       return redirect('/');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', [
            'tasks' => $task
        ]);
    }

    public function update(Request $request, Task $task)
    {
        $tasks_data = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $task->update($tasks_data);

       return redirect('/');
    }
    
    public function destroy(Task $task)
    {
        $task->delete();
        return back();
    }
}
