<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            font-size: 30px;
            color: #FB9039;
        }

        body {
            background: #1F3044;
            color: white;
        }

        p:nth-of-type(1) {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }

        .paragraph {
            text-align: center;
        }

        .main-form {
            width: 100%;
            display: flex;
            padding: 1% 10%;
        }

        .main-form form {
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .main-form input {
            width: 100%;
            height: 35px;
            border-radius: 20px;
            padding: 0 0 0 18px;
            outline: none;
        }

        .main-form input::placeholder {
            color: #a5a3a3;
            padding: 2px 0 0 2px;
        }

        button {
            font-size: 15px;
            padding: 8px 20px;
            align-self: flex-end;
            margin: -10px 20px 0 0;
            border-radius: 20px;
            background-color: #849531;
            border: none;
            color: white;
        }

        .table {
            display: flex;
            justify-content: center;
            padding: 50px 200px;
        }

        .table table {
            width: 100%;
        }

        .table table th {
            color: #FB9039;
            font-size: 24px;
        }

        .table table tr th {
            text-align: center;
            height: 70px;
        }

        .table table tr td {
            text-align: center;
            height: 50px;
        }

        .table table a:nth-last-of-type(1){
            text-decoration: none;
            color: white;
            background-color: red;
            padding: 10px 20px;
            border-radius: 22px;
        }
        .table table a:nth-last-of-type(2){
            text-decoration: none;
            color: white;
            background-color: skyblue;
            padding: 10px 20px;
            border-radius: 22px;
        }
    </style>
</head>

<body>
    <h1>TODO APPLICATION</h1>
    <div class="main-form">
        <form action="{{ route('saveTodo') }}" method="post">
            @csrf
            <input type="text" name="todo" placeholder="Enter the Items"><br><br>
            <button type="submit">Save</button>
        </form>
    </div>
    <div class="table">
        <table border="1">
            <tr>
                <th>ID</th>
                <th style="width: 60%">Title</th>
                <th>Actions</th>
            </tr>
            @foreach ($list as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->title }}</td>
                    {{-- <td><a href="{{url('/delete/'.$value->id)}}"></a></td> --}}
                    <td>
                        <a href={{ 'edit/' . $value['id'] }}>Edit</a>
                        <a href={{ 'delete/' . $value['id'] }}>Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
