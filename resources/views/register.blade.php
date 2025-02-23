<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div>
        <h2>Register</h2>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div>
                <label for="firstName">First Name</label>
                <input type="text" value=" {{old('firstName')}} " name="firstName" id="firstName" required>
            </div>
            <div>
                <label for="lastName">Last Name</label>
                <input type="text" value=" {{old('lastName')}} " name="lastName" id="lastName" required>
            </div>
            <div>
                <label for="username">Username</label>
                <input type="text" value=" {{old('username')}} " name="username" id="username" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" value=" {{old('email')}} " name="email" id="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" value=" {{old('password')}} " name="password" id="password" required>
            </div>
            <div>
                <label for="password">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>
            <button type="submit">Register</button>
        </form>
        <p><a href=" {{route('user.login')}} ">Login</a></p>
    </div>
    @if ($errors->any())
    <div style="background-color: lightcoral; margin: 10px; padding:10px; color:rgb(88, 5, 5)">
        <p>Errors: </p>
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
            @endforeach
        </ul>
    </div>
    @endif
</body>
</html>