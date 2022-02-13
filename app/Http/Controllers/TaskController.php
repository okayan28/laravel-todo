<?php

namespace App\Http\Controllers;

use App\Models\Assignee;
use Illuminate\Http\Request;
use App\Models\task;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $items = Task::with('assignee')->get();
        // foreach ($items as $item) {
        //     echo $item->assignee->name;
        // }
        return view('task.index', ['items' => $items, 'input' => '']);
    }

    public function add(Request $request)
    {
        $items = Assignee::all();
        return view('task.add', ['items' => $items]);
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
        $items = Task::where('title', $request->input)->get();
        $param = ['input' => $request->input, 'items' => $items];
        return view('task.index', $param);
    }

}


