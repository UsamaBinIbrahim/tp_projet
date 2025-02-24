<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        .navbar ul {
            display: flex;
            justify-content: flex-start;
            list-style: none;
            padding: 0 20px;
            width: 100%;
        }
        .navbar ul li {
            margin-right: 20px;
        }
        .navbar ul li a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <ul>
            <li><a href="">Dashboard</a></li>
            <li><a href="">Profile</a></li>
            <li><a href="">Settings</a></li>
            <li><a href="">Logout</a></li>
        </ul>
    </nav>
    <hr>
    @foreach ($posts as $post)
        <div>
            <div style="display: flex; justify-content: space-around">
                <div> {{$post['user_id']}} </div>
                <div> {{$post['created_at']}} </div>
            </div>
            <div style="display: flex; justify-content: center">
                <div> {{$post['description']}} </div>
            </div>
            <div style=" display:flex;justify-content:center">
                <img src="{{asset('/img/desktop_shelfs.jpeg')}}" alt="" style="width: 150px; height: 150px;">
            </div>
        </div>
    @endforeach
    
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>