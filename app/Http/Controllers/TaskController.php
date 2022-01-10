<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from tasks');
        return view('task.index', ['items' => $items]);
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

    public function edit(Request $request){
        $param = ['id' => $request->id];
        $item = DB::select('select * from tasks where id = :id', $param);
        return view('task.edit', ['form' => $item[0]]);
    }

    public function update(Request $request){
        $this->validate($request, task::$rules);
        $task = Task::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $task->fill($form)->save();
        return redirect('/task');
    }

}


