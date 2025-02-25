<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/style.css')}}">
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
    <div class="posts-container">
        @foreach ($posts as $post)
            <div class="post">
                <div class="post-header">
                    <div>User ID: {{$post['user_id']}}</div>
                    <div>Created At: {{$post['created_at']}}</div>
                </div>
                <div class="post-description">
                    {{$post['description']}}
                </div>
                <div class="post-image">
                    <img src="{{asset('img/'. $post['image'])}}" alt="Post Image">
                </div>
            </div>
        @endforeach
    </div>
    <button class="fixed-button bg-dark">+</button>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>