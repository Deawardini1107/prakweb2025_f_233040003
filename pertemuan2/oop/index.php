<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Test OOP</title>
    <style>
        body { font-family: Arial; padding: 30px; background: #ecf0f1; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; }
        h1 { color: #2c3e50; border-bottom: 3px solid #3498db; padding-bottom: 15px; }
        .menu { list-style: none; padding: 0; }
        .menu li { margin: 15px 0; }
        .menu a { 
            display: block; 
            padding: 15px; 
            background: #3498db; 
            color: white; 
            text-decoration: none; 
            border-radius: 5px;
            transition: 0.3s;
        }
        .menu a:hover { background: #2980b9; transform: translateX(10px); }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 Daftar Test OOP - Pertemuan 2</h1>
        
        <ul class="menu">
            <li><a href="Rumah/Rumah.php">1. Class Rumah (Constructor, Properties, Methods)</a></li>
            <li><a href="Produk/index.php">2. Inheritance (Produk, Komik, Game)</a></li>
            <li><a href="Autoload/Index.php">3. Autoload</a></li>
            <li><a href="Namespace/index.php">4. Namespace</a></li>
            <li><a href="Abstract/Cat.php">5. Abstract Class</a></li>
            <li><a href="Constant/CobaConstant.php">6. Constant</a></li>
            <li><a href="Static/ContohStatic.php">7. Static</a></li>
            <li><a href="test_all.php">8. ✨ Test Semua Sekaligus</a></li>
        </ul>

        <hr style="margin: 30px 0;">
        
        <h2>Info:</h2>
        <p><strong>Document Root:</strong> <?php echo $_SERVER['DOCUMENT_ROOT']; ?></p>
        <p><strong>Current Path:</strong> <?php echo __DIR__; ?></p>
        <p><strong>URL Path:</strong> <?php echo $_SERVER['REQUEST_URI']; ?></p>
    </div>
</body>
</html>
