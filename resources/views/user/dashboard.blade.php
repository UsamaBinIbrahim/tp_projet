<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
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
        .posts-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start; /* Align posts to the left */
            gap: 20px;
            padding: 20px;
            margin-top: 60px; /* Add margin to avoid overlap with fixed navbar */
        }
        .post {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            background-color: #f9f9f9;
            max-width: 350px;
            flex: 1 1 calc(33.333% - 40px); /* Adjust the width of the posts */
            display: flex;
            flex-direction: column;
            /* Remove fixed height */
        }
        .post-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .post-description {
            text-align: left;
            margin-bottom: 10px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3; /* Limit the description to 3 lines */
            -webkit-box-orient: vertical;
        }
        .post-image {
            display: flex;
            justify-content: flex-start;
            margin-top: auto; /* Adjust the margin-top of the image */
        }
        .post-image img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .fixed-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            color: white;
            border: none;
            border-radius: 50%;
            width: 70px; /* Increased width */
            height: 70px; /* Increased height */
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 35px; /* Increased font size */
            cursor: pointer;
            z-index: 1000;
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