<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container">

<ul>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
    @endif
</ul>
    <form method="POST" action="/users">

        @csrf
        <lable>Name:</lable>
        <input type="text" name="name" value="{{ old('name') }}" class=" form-control @error('email') is-invalid @enderror"><br>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        <lable>Email:</lable>
        <input type="email" name="email" value="{{ old('email') }}" class=" form-control @error('email') is-invalid @enderror"><br>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        <lable>Password:</lable>
        <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror"><br>
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror

        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
