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
            @error('deadline')
                <tr><th>!!ERROR!!</th><td>{{$message}}</td></tr>
            @enderror
            <tr><th>deadline: </th><td><input type="datetime-local" name="deadline"></td></tr>
            @if (count($errors) > 0)
            <p style="color: red">日付を確認して下さい!</p>
            @endif
            <tr><th>assignee: </th><td><select name="assignee_id" id="assignee_select">
                 <option value="">--Choose an option--</option>
                 @foreach ($items as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                 @endforeach
                 </select></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
        </form>
    </body>
</html>


