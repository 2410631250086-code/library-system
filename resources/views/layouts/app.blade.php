<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Library System</h1>
        <nav>
            <a href="/dashbord">Dashboard</a>
            <a href="/books">Books</a>
            <a href="/catageries">Categories</a>
            <a href="/members">Members</a>
        </nav>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>&copy; 2026 Library Sistem</p>
    </footer>
</body>
</html>

