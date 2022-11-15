<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit this todo</h1>
    <form action="{{route('update')}}" method="POST">
        @csrf
        <input type="text" name="todo" value="{{$data->title}}"><br>
        <input type="hidden" name="id" value="{{$data->id}}"><br>
        <button type="submit">Save</button>
        <button><a href="{{url('back')}}">Back</a> </button>

    </form>
</body>
</html>