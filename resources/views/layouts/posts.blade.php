<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        * { 
            margin: 0;
            padding: 0; 
            font-family: sans-serif; 
            box-sizing: border-box; 
        }
        body { 
            background-color: rgb(55, 50, 50); 
            height: 95vh;
            width: 100%;
            overflow-x: hidden;
        }
        .navbar { 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            background-color: rgb(11, 11, 63); 
            padding: 15px 20px;
            position: fixed;
            top: 0;
            z-index: 100;
            width: 100%; 
        }
        .nav-links { 
            list-style: none; 
            display: flex; 
            justify-content: space-around;
            width: 100%; 
        }
        .nav-links li { 
            padding: 10px; 
        }
        .nav-links a { 
            text-decoration: none; 
            color: white;
            font-size: 18px;
            transition: all 0.3s ease; 
        }
        .nav-links a:hover { 
            color: skyblue;
        }

        .visible {
            width: 100%;
            display: none;
        }
        .menu-toggle {
            display: none; 
            font-size: 30px; 
            color: white; 
            cursor: pointer; 
            user-select: none;
        }
        .menu { 
            display: none; 
            font-size: 30px; 
            color: white;
        }
        footer div a {
            color: white; text-decoration: none; margin: 0 10px;
        }
        @media (min-width:280px) and (max-width: 768px) {
            .visible {
                width: 100%;
                display: flex; 
                justify-content: space-between;
            } 
            .menu-toggle { 
                display: block;
                font-size: 18px;
            }
            .menu{
                display: block;
                display: 100%;
                font-size: 18px;
            }
            .nav-links { 
                display: none; 
                flex-direction: column; 
                position: absolute; 
                top: 55px; 
                right: 0; 
                width: 30%; 
                background-color: rgb(11, 11, 63); 
                text-align: center; 
                padding: 15px 0; 
                opacity: 0;
                transform: translateY(-10px);
                transition: opacity 0.5s ease, transform 0.5s ease;
                pointer-events: none;
            }
            .nav-links.show {
                display: flex;
                opacity: 1;
                transform: translateY(0);
                pointer-events: auto;
            }
            footer{
                background-color: rgb(11, 11, 63); 
                color: white; 
                padding: 10px;
                text-align: center; 
                margin-top: 160px; 
                width:200px;"
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">

        <div class="visible">
            <div class="menu">Menu</div>
            <div class="menu-toggle" onclick="toggleMenu()">☰</div>    
        </div>

        <ul class="nav-links">
            <li class="dashboard"><a href="{{route('dashboard', $user_id)}}">Dashboard</a></li>
            <li class="dashboard"><a href="{{route('users.profile', $user_id)}}">Profile</a></li>
            <li class="dashboard"><a href="{{route('logout')}}">Logout</a></li>
        </ul>
    </nav>
    @yield('content')

    <footer style="background-color: rgb(11, 11, 63); color: white; padding: 20px; text-align: center; margin-top: 200px; width:100%;">
        <div style="margin-bottom: 10px;">
            <a href="#" class="footer-link">Home</a>
            <a href="#" class="footer-link">About Us</a>
            <a href="#" class="footer-link">Contact</a>
        </div>
        <p style="margin: 0; font-size: 14px;">&copy; 2023 Your Company. All rights reserved.</p>
    </footer>

    <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script>
        function toggleMenu() { document.querySelector(".nav-links").classList.toggle("show"); }
    </script>
</body>
</html>