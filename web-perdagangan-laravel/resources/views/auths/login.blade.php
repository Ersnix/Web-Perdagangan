<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('login_process') }}" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
                <th style="text-align: left">Nama</th>
                <td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
            <tr>
                <th style="text-align: left">password</th>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
    
</body>
</html>