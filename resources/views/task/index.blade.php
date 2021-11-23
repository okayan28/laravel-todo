<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>タスク一覧</title>
    </head>
    <body>
        <form>
        @csrf

        
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