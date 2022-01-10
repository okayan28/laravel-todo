<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>タスク更新ページ</title>
    </head>
    <body>
        <form method="post" action="{{url('task/edit')}}">
        @csrf
        <p>タスク更新</p>
        <table>
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr><th>title: </th><td><input type="text" name="title" value="{{$form->title}}"></td></tr>
            <tr><th>task: </th><td><input type="text" name="description" value="{{$form->description}}" style="height: 100px"></td></tr>
            <tr><th>deadline: </th><td><input type="datetime-local" name="deadline" value="{{$form->deadline}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
        </form>
    </body>
</html>

