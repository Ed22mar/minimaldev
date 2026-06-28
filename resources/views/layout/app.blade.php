<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - MinimalDev</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}" class="logo">MinimalDev</a>
            <ul>
                <li><a href="{{ route('home') }}" class="active">Home</a></li>
                <li><a href="{{ route('posts.index') }}">Posts</a></li>
                <li><a href="{{ route('sobre') }}">Sobre</a></li>
                <li><a href="contato.html">Contato</a></li>
                <li><a href="user.html">Perfil</a></li>
                <li><a href="loginpage.html">Login</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')


    <footer>
        <p>&copy; 2026 MinimalDev. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
