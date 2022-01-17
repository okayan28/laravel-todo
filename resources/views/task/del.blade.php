<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>削除ページ</title>
    </head>
    <body>
        <form method="post" action="{{url('task/del')}}">
        @csrf
        <p>タスクの削除</p>
        <table>
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr><th>title: </th><td>{{$form->title}}</td></tr>
            <tr><th>task: </th><td>{{$form->description}}</td></tr>
            <tr><th>deadline: </th><td>{{$form->deadline}}</td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
        </form>
    </body>
</html>
