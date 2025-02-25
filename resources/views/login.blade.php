<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/login/style.css')}}">
</head>
<body>
    <div class="login-container">
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
        @if(session('login'))
            <div class="error-message">
                {{session('login')}}
            </div>
        @endif
    </div>
</body>
</html>