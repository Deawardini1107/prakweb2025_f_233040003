<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel MVC Practice' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            min-height: 100vh;
            background-attachment: fixed;
        }
        
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0;
            background: rgba(255, 255, 255, 0.95);
            min-height: calc(100vh - 40px);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            backdrop-filter: blur(10px);
        }
        
        nav {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 10px;
            transition: all 0.3s ease;
            display: inline-block;
            font-weight: 600;
            font-size: 15px;
            position: relative;
            overflow: hidden;
        }
        
        nav a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: left 0.3s ease;
        }
        
        nav a:hover::before {
            left: 0;
        }
        
        nav a:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .content-wrapper {
            padding: 40px;
        }
        
        h1 {
            color: #2d3748;
            margin-bottom: 10px;
            font-size: 2.5em;
            font-weight: 800;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        h2 {
            color: #4a5568;
            margin-top: 30px;
            margin-bottom: 15px;
            font-size: 1.8em;
            font-weight: 700;
        }
        
        h3 {
            color: #4a5568;
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 1.4em;
            font-weight: 600;
        }
        
        p {
            color: #718096;
            font-size: 16px;
            line-height: 1.8;
        }
        
        a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        
        a:hover {
            color: #764ba2;
            text-decoration: underline;
        }
        
        ul {
            margin: 20px 0;
            padding-left: 30px;
        }
        
        li {
            margin: 12px 0;
            color: #4a5568;
            font-size: 16px;
        }
        
        footer {
            background: linear-gradient(to right, #f7fafc, #edf2f7);
            padding: 30px;
            text-align: center;
            color: #718096;
            border-top: 3px solid #667eea;
            margin-top: 60px;
        }
        
        footer p {
            margin: 5px 0;
            font-size: 14px;
        }
        
        footer p:first-child {
            font-weight: 600;
            color: #4a5568;
            font-size: 15px;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .content-wrapper {
            animation: fadeIn 0.6s ease-out;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="/">🏠 Home</a>
            <a href="/about">ℹ️ About</a>
            <a href="/posts">📝 Posts</a>
            <a href="/categories">📁 Categories</a>
        </nav>

        <div class="content-wrapper">
            {{ $slot }}
        </div>

        <footer>
            <p>© 2025 Laravel Practicum - Web Programming Practice</p>
            <p>Built with Laravel & Blade • Pertemuan 3 - OOP & MVC</p>
        </footer>
    </div>
</body>
</html>
