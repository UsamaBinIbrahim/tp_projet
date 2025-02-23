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
                <input type="text" name="firstName" id="firstName" required>
            </div>
            <div>
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" required>
            </div>
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div>
                <label for="password">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>
            <button type="submit">Register</button>
        </form>
        <p><a href=" {{route('user.login')}} ">Login</a></p>
    </div>
</body>
</html>