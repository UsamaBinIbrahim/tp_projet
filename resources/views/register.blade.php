<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/login/style.css')}}">
    <style>
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Register</h2>
        <form action="{{route('register.store')}}" method="POST">
            @csrf
            <div class="form-row">
                <div>
                    <label for="firstName">First Name</label>
                    <input type="text" value="{{$errors->any()? old('firstName') : null}}" name="firstName" id="firstName" required>
                </div>
                <div>
                    <label for="lastName">Last Name</label>
                    <input type="text" value="{{$errors->any()? old('lastName') : null}}" name="lastName" id="lastName" required>
                </div>
            </div>
            <div class="form-row">
                <div>
                    <label for="username">Username</label>
                    <input type="text" value="{{$errors->any()? old('username') : null}}" name="username" id="username" required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" value="{{$errors->any()? old('email') : null}}" name="email" id="email" required>
                </div>
            </div>
            <div class="form-row">
                <div>
                    <label for="password">Password</label>
                    <input type="password" value="" name="password" id="password" required>
                </div>
                <div>
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                </div>
            </div>
            <button type="submit">Register</button>
        </form>
        <p><a href="{{route('index')}}">Login</a></p>
        @if ($errors->any())
        <div class="error-message">
            <p>Invalid Inputs: </p>
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{$error}} </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
</body>
</html>