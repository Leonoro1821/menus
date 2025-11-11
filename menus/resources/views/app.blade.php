<!DOCTYPE html>
<html>
<head>
    <title>Menus Project</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        nav { background-color: #333; padding: 10px; }
        nav a {
            color: white; padding: 10px 15px; text-decoration: none;
        }
        nav a.active {
            background-color: #555;
            border-radius: 5px;
        }
        footer {
            background-color: #222; color: white;
            text-align: center; padding: 15px; margin-top: 20px;
        }
        .content { padding: 20px; }
    </style>
</head>
<body>

    <nav>
        <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ route('photos') }}" class="{{ Request::is('photos') ? 'active' : '' }}">Photos</a>
        <a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a>
    </nav>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        <p>Created by Samuel de Jesús Álvarez Torres — TecMilenio</p>
    </footer>

</body>
</html>
