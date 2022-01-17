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
        return view('task.index', ['items' => $items, 'input' => '']);
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

    public function del(Request $request){
        $param = ['id' => $request->id];
        $item = DB::select('select * from tasks where id = :id', $param);
        return view('task.del', ['form' => $item[0]]);
    }

    public function remove(Request $request){
        $param = ['id' => $request->id];
        DB::delete('delete from tasks where id = :id', $param);
        return redirect('/task');
    }

    public function search(Request $request){
        $item = Task::find($request->input);
        $param = ['input' => $request->input, 'items' => [$item]];
        return view('task.index', $param);
    }

}


