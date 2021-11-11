<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

class TaskController extends Controller
{
    public function index(Request $request)
    {
    return view('task.index');
    }

    public function add(Request $request)
    {
        return view('task.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Task::$rules);
        $task = new Task;
        $form = $request->all();
        unset($form['_token']);
        $task->fill($form)->save();
        return redirect('/task');
    }
}


