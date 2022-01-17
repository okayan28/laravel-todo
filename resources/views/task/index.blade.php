<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>タスク一覧</title>
    </head>
    <body>
        <form>
        @csrf
            <table>
                <a href="/task/add">タスクを追加する</a>
                <thead><tr><th>Title</th><th>Task</th><th>Deadline</th></tr></thead>
                <tbody>
                @foreach ($items as $item)
                    <tr><td><a href="/task/edit?id={{$item->id}}">{{$item->title}}</a></td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->deadline}}</td></tr>
                @endforeach
                </tbody>
            </table>
        
        </form>
    </body>
</html>




{{-- @extends('task.index')

@section('title', 'Add')

@section('menubar')
    @parent
    タスク作成ページ
@endsection

@section('content')
    <form action="/task/add" method="post">
        <table>
            @csrf
            <tr><th>title: </th><td><input type="text" name="title"></td></tr>
            <tr><th>task: </th><td><input type="text" name="description"></td></tr>
            <tr><th>deadline: </th><td><input type="datetime" name="deadline"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>
@endsection --}}