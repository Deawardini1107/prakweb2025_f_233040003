<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'My Website' }}</title>
</head>
<body>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/posts">Posts</a> |
        <a href="/categories">Categories</a>
    </nav>

    <hr>

    {{ $slot }}

    <hr>

    <footer>
        <p>© 2025 Laravel Practicum</p>
    </footer>

</body>
</html>
