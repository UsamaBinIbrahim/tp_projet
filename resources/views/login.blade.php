<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <h2>Login</h2>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div>
                <label for="username">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p><a href="{{route('register')}}">Don't have an account? Create one now</a></p>
    </div>
    @session('login')
    <div style="background-color: lightcoral; margin: 10px; padding:5px; color:rgb(88, 5, 5)">
        {{session('login')}}
    </div>
    @endsession
</body>