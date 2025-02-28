<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery/jquery-3.7.1.js')}}"></script>
    @yield('style')
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <ul>
            <li><a href="{{route('dashboard', $user_id)}}">Dashboard</a></li>
            <li><a href="">Profile</a></li>
            <li><a href="">Settings</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
        </ul>
    </nav>
    @yield('content')
    <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
</body>
</html>