<x-layout>
    <x-slot:title>Home - Laravel MVC Practice</x-slot:title>

    <style>
        .hero-section {
            text-align: center;
            padding: 40px 0;
            margin-bottom: 40px;
        }
        
        .subtitle {
            font-size: 18px;
            color: #718096;
            margin: 20px auto 40px;
            max-width: 700px;
            line-height: 1.8;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }
        
        .feature-card {
            background: linear-gradient(135deg, #ffffff 0%, #f7fafc 100%);
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            border: 2px solid #e2e8f0;
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.2);
            border-color: #667eea;
        }
        
        .feature-icon {
            font-size: 48px;
            margin-bottom: 20px;
            display: block;
        }
        
        .feature-title {
            font-size: 24px;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 12px;
        }
        
        .feature-desc {
            color: #718096;
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 20px;
        }
        
        .feature-link {
            display: inline-block;
            padding: 12px 28px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }
        
        .feature-link:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
            text-decoration: none;
            color: white;
        }
        
        .info-section {
            background: linear-gradient(135deg, #f7fafc 0%, #e2e8f0 100%);
            padding: 30px;
            border-radius: 16px;
            margin: 40px 0;
            border-left: 5px solid #667eea;
        }
        
        .info-section h3 {
            color: #2d3748;
            margin-top: 0;
            font-size: 22px;
        }
        
        .tech-stack {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        
        .tech-badge {
            background: white;
            padding: 8px 16px;
            border-radius: 20px;
            color: #667eea;
            font-weight: 600;
            font-size: 14px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }
    </style>

    <div class="hero-section">
        <h1>Welcome to Laravel MVC Practice</h1>
        <p class="subtitle">
            Aplikasi web modern yang dibangun menggunakan Laravel framework, 
            mendemonstrasikan konsep Object-Oriented Programming (OOP) dan 
            Model-View-Controller (MVC) design pattern.
        </p>
    </div>

    <div class="features-grid">
        <div class="feature-card">
            <span class="feature-icon">📝</span>
            <div class="feature-title">Manage Posts</div>
            <p class="feature-desc">
                Kelola artikel blog dengan fitur CRUD lengkap. 
                Create, Read, Update, dan Delete posts dengan mudah.
            </p>
            <a href="/posts" class="feature-link">Lihat Posts →</a>
        </div>

        <div class="feature-card">
            <span class="feature-icon">📁</span>
            <div class="feature-title">Manage Categories</div>
            <p class="feature-desc">
                Organisir posts berdasarkan kategori. 
                Manajemen kategori yang simpel dan efektif.
            </p>
            <a href="/categories" class="feature-link">Lihat Categories →</a>
        </div>
    </div>

    <div class="info-section">
        <h3>🎓 Konsep yang Dipelajari</h3>
        <ul style="color: #4a5568; line-height: 2; margin: 15px 0;">
            <li><strong>MVC Pattern</strong> - Model, View, Controller separation</li>
            <li><strong>OOP Principles</strong> - Encapsulation, Inheritance, Polymorphism</li>
            <li><strong>Eloquent ORM</strong> - Database relationships & queries</li>
            <li><strong>Blade Templates</strong> - Modern templating engine</li>
            <li><strong>RESTful Routing</strong> - Clean and semantic URLs</li>
        </ul>
    </div>

    <div class="info-section">
        <h3>🛠️ Technology Stack</h3>
        <div class="tech-stack">
            <span class="tech-badge">Laravel 11</span>
            <span class="tech-badge">PHP 8.x</span>
            <span class="tech-badge">Blade Engine</span>
            <span class="tech-badge">Eloquent ORM</span>
            <span class="tech-badge">SQLite</span>
        </div>
    </div>

</x-layout>
