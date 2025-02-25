<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <ul>
            <li><a href="{{route('posts.dashboard', $user_id)}}">Dashboard</a></li>
            <li><a href="">Profile</a></li>
            <li><a href="">Settings</a></li>
            <li><a href="">Logout</a></li>
        </ul>
    </nav>
    @yield('content')
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>