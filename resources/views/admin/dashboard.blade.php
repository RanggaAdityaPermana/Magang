<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin - PDAM Halmahera Selatan</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background: #F3F4F6;
        }
        .header {
            background: white;
            padding: 16px 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .logo-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .logo-icon {
            width: 50px;
            height: 50px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo-m {
            position: absolute;
            width: 20px;
            height: 30px;
            background: #10B981;
            clip-path: polygon(50% 0%, 0% 100%, 50% 85%, 100% 100%);
        }
        .logo-m:nth-child(1) {
            left: 5px;
            top: 10px;
            transform: rotate(-18deg);
        }
        .logo-m:nth-child(2) {
            left: 25px;
            top: 8px;
            transform: rotate(0deg);
        }
        .logo-m:nth-child(3) {
            left: 45px;
            top: 10px;
            transform: rotate(18deg);
        }
        .logo-circle {
            position: absolute;
            width: 24px;
            height: 24px;
            background: #3B82F6;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }
        .logo-text {
            font-size: 12px;
            font-weight: 600;
            color: #10B981;
        }
        .company-name {
            font-size: 20px;
            font-weight: 700;
            color: #1F2937;
        }
        .layout-container {
            display: flex;
            min-height: calc(100vh - 73px);
        }
        .sidebar {
            width: 250px;
            background: #1E3A8A;
            padding: 24px 0;
            display: flex;
            flex-direction: column;
        }
        .sidebar-nav {
            flex: 1;
        }
        .sidebar-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 24px;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 15px;
        }
        .sidebar-item:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        .sidebar-item.active {
            background: #3B82F6;
        }
        .sidebar-icon {
            width: 20px;
            height: 20px;
            font-size: 18px;
        }
        .sidebar-logout {
            margin-top: auto;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 16px;
            margin-top: 16px;
        }
        .main-content {
            flex: 1;
            padding: 32px;
            background: #F3F4F6;
        }
        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 24px;
        }
        .cards-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }
        .dashboard-card {
            background: white;
            border-radius: 8px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-size: 16px;
            font-weight: 600;
            color: #1F2937;
            margin-bottom: 16px;
        }
        .card-value {
            font-size: 36px;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 8px;
        }
        .card-label {
            font-size: 14px;
            color: #6B7280;
            margin-bottom: 20px;
        }
        .card-button {
            background: #3B82F6;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            float: right;
        }
        .card-button:hover {
            background: #2563EB;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }
        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo-container">
            <div class="logo-icon">
                <div class="logo-m"></div>
                <div class="logo-m"></div>
                <div class="logo-m"></div>
                <div class="logo-circle"></div>
            </div>
            <div class="logo-text">TIRTA DHARMA</div>
        </div>
        <div class="company-name">PDAM HALMERA SELATAN</div>
    </header>

    <!-- Layout Container -->
    <div class="layout-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <nav class="sidebar-nav">
                <a href="/dashboard" class="sidebar-item active">
                    <span class="sidebar-icon">🏠</span>
                    <span>Dashboard</span>
                </a>
                <a href="/kelola-konten" class="sidebar-item">
                    <span class="sidebar-icon">🗂️</span>
                    <span>Kelola Konten</span>
                </a>
                <a href="#" class="sidebar-item">
                    <span class="sidebar-icon">💬</span>
                    <span>Pengaduan</span>
                </a>
                <a href="#" class="sidebar-item">
                    <span class="sidebar-icon">💦</span>
                    <span>Meteran Air Baru</span>
                </a>
            </nav>
            <div class="sidebar-logout">
                <a href="/login" class="sidebar-item">
                    <span>Logout</span>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <h1 class="page-title">Dashboard</h1>
            
            <div class="cards-container">
                <!-- Card 1: Total Pengaduan -->
                <div class="dashboard-card">
                    <h3 class="card-title">Total Pengaduan</h3>
                    <div class="card-value">79</div>
                    <div class="card-label">User</div>
                    <div class="clearfix">
                        <button class="card-button">Detail</button>
                    </div>
                </div>

                <!-- Card 2: Total Pemasangan Baru -->
                <div class="dashboard-card">
                    <h3 class="card-title">Total Pemasangan Baru</h3>
                    <div class="card-value">13</div>
                    <div class="card-label">User</div>
                    <div class="clearfix">
                        <button class="card-button">Detail</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
