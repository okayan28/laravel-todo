<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>タスク作成ページ</title>
    </head>
    <body>
        <form method="post" action="{{url('task/add')}}">
        @csrf
        <p>タスク追加</p>
        <table>
            <tr><th>title: </th><td><input type="text" name="title"></td></tr>
            <tr><th>task: </th><td><input type="text" name="description" style="height: 100px"></td></tr>
            <tr><th>deadline: </th><td><input type="datetime-local" name="deadline"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
        </form>
    </body>
</html>


