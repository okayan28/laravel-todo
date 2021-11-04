<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <h2>タスク作成ページ</h2>
    </head>
    <body>
        <p>タスク追加</p>
        <table>
            <tr><th>title: </th><td><input type="text" name="title"></td></tr>
            <tr><th>task: </th><td><input type="text" name="description" style="height: 100px"></td></tr>
            <tr><th>deadline: </th><td><input type="datetime-local" name="deadline"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
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