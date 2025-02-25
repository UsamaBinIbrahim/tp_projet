<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/login/style.css')}}">
    <style>
    </style>
</head>
<body>
    <div class="login-container">
        <h2>@yield('heading')</h2>
        @yield('content')
        @if ($errors->any())
        <div class="error-message">
            <p>Invalid Inputs: </p>
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{$error}} </li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</body>
</html>