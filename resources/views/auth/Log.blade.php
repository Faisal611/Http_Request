<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <form action="post" method="POST">
        @csrf
        <lable>User Email:</lable>
        <input type="email" name="email" value="{{ old('email') }}">
        <br>
        <br>
        <lable>Password:</lable>
        <input type="password" name="password">
        <br>
        <br>
        <input type="submit" name="submit" value="SubmiT">
    </form>
</body>
</html>
