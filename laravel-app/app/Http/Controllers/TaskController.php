<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function tasks () {

        $tasks = Task::get();
        return view('tasks', ['tasks' => $tasks]);
    }

    public function create (Request $request) {
        $task = new Task([
            "name" => $request->get('name'),
            "author" => $request->get('author'),
            "description" => $request->get('description')
        ]);

        $task->save();
        return redirect('/tasks');
    }
}
