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
            @error('deadline')
                <tr><th>!!ERROR!!</th><td>{{$message}}</td></tr>
            @enderror
            <tr><th>deadline: </th><td><input type="datetime-local" name="deadline" value="{{$form->deadline}}"></td></tr>
            @if (count($errors) > 0)
            <p style="color: red">日付を確認して下さい!</p>
            @endif
            <tr><th></th><td><input type="submit" value="send"></td><td><a href="/task/del?id={{$form->id}}">delete</a></td></tr>
        </table>
        </form>
    </body>
</html>

