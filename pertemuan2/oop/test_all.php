<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test OOP - Pertemuan 2</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            padding: 20px; 
            background-color: #f5f5f5;
        }
        .section { 
            background: white; 
            padding: 15px; 
            margin: 15px 0; 
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        h2 { 
            color: #2c3e50; 
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }
        h3 { 
            color: #34495e; 
            margin-top: 20px;
        }
        .result {
            background-color: #ecf0f1;
            padding: 10px;
            border-left: 4px solid #3498db;
            margin: 10px 0;
        }
        .success { color: #27ae60; font-weight: bold; }
        .info { color: #3498db; }
    </style>
</head>
<body>
    <h1>📚 Test OOP - Pertemuan 2</h1>

    <div class="section">
        <h2>1. Abstract Class</h2>
        <div class="result">
            <?php
            require_once 'Abstract/Animal.php';
            require_once 'Abstract/Cat.php';
            ?>
        </div>
    </div>

    <div class="section">
        <h2>2. Interface</h2>
        <div class="result">
            <?php
            require_once 'Interface/Buah.php';
            require_once 'Interface/Apel.php';
            require_once 'Interface/Jeruk.php';
            
            $apel = new Apel();
            $jeruk = new Jeruk();
            
            $apel->caraMakan();
            $jeruk->caraMakan();
            ?>
        </div>
    </div>

    <div class="section">
        <h2>3. Constant</h2>
        <div class="result">
            <?php
            include 'Constant/CobaConstant.php';
            ?>
        </div>
    </div>

    <div class="section">
        <h2>4. Static</h2>
        <div class="result">
            <?php
            include 'Static/ContohStatic.php';
            ?>
        </div>
    </div>

    <div class="section">
        <h2>5. Namespace</h2>
        <div class="result">
            <?php
            include 'Namespace/index.php';
            ?>
        </div>
    </div>

    <div class="section">
        <h2>6. Autoload</h2>
        <div class="result">
            <?php
            include 'Autoload/Index.php';
            ?>
        </div>
    </div>

    <div class="section">
        <h2>7. Inheritance (Produk)</h2>
        <div class="result">
            <?php
            include 'Produk/index.php';
            ?>
        </div>
    </div>

    <div class="section">
        <h2>8. Class Rumah (Basic OOP)</h2>
        <div class="result">
            <?php
            include 'Rumah/Rumah.php';
            ?>
        </div>
    </div>

    <div class="section success">
        <h2>✅ Kesimpulan</h2>
        <p>Semua konsep OOP PHP berhasil dijalankan!</p>
        <ul>
            <li>Abstract Class ✓</li>
            <li>Interface ✓</li>
            <li>Constant ✓</li>
            <li>Static ✓</li>
            <li>Namespace ✓</li>
            <li>Autoload ✓</li>
            <li>Inheritance ✓</li>
            <li>Constructor & Properties ✓</li>
        </ul>
    </div>
</body>
</html>
