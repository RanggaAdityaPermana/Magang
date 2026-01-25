<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informasi - PDAM Halmahera Selatan</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            animation: fadeIn 0.5s ease-in;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .page-content {
            animation: slideUp 0.6s ease-out;
        }
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .hero-overlay {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4));
        }
        .header-dark {
            background: #1E3A8A;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            min-width: 280px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 8px;
            padding: 8px 0;
            z-index: 1000;
            animation: slideDown 0.3s ease-out;
        }
        .dropdown-menu.show {
            display: block;
        }
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .dropdown-item {
            display: block;
            padding: 10px 20px;
            color: #374151;
            text-decoration: none;
            transition: all 0.2s ease;
            font-size: 14px;
        }
        .dropdown-item:hover {
            background: #F3F4F6;
            color: #3B82F6;
            padding-left: 24px;
        }
        .dropdown-item.active {
            background: #EBF4FF;
            color: #3B82F6;
            font-weight: 600;
        }
        .group:hover .dropdown-menu {
            display: block;
        }
        @media (max-width: 768px) {
            .group:hover .dropdown-menu {
                display: none;
            }
        }
        .article-image {
            width: 100%;
            height: 450px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 24px;
        }
        .article-title {
            font-size: 26px;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 12px;
            line-height: 1.4;
        }
        .article-date {
            color: #6B7280;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .article-content {
            color: #374151;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 28px;
        }
        .read-more-btn {
            background: #10B981;
            color: white;
            padding: 12px 32px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        .read-more-btn:hover {
            background: #059669;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }
        .recent-post-item {
            display: flex;
            gap: 12px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #E5E7EB;
        }
        .recent-post-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .recent-post-thumbnail {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
            flex-shrink: 0;
        }
        .recent-post-content {
            flex: 1;
        }
        .recent-post-title {
            font-size: 14px;
            font-weight: 600;
            color: #3B82F6;
            margin-bottom: 6px;
            line-height: 1.4;
            text-decoration: none;
        }
        .recent-post-title:hover {
            text-decoration: underline;
        }
        .recent-post-date {
            font-size: 12px;
            color: #6B7280;
            margin-top: 4px;
        }
        .sidebar-title {
            font-size: 20px;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 24px;
        }
        .content-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 32px;
            margin-bottom: 24px;
        }
        .announcement-date-block {
            background: #E0F2F7;
            min-width: 130px;
            position: relative;
        }
        .announcement-date-block::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: #3B82F6;
        }
        .announcement-card {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }
        .water-background {
            background: linear-gradient(135deg, #E0F2FE 0%, #BAE6FD 50%, #7DD3FC 100%);
            position: relative;
            overflow: hidden;
        }
        .water-background::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(255, 255, 255, 0.25) 0%, transparent 50%);
            animation: waterRipple 15s ease-in-out infinite;
        }
        @keyframes waterRipple {
            0%, 100% {
                transform: scale(1) rotate(0deg);
                opacity: 0.5;
            }
            50% {
                transform: scale(1.1) rotate(5deg);
                opacity: 0.7;
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    @include('partials._navbar')

    <!-- Hero Section -->
    <section class="relative h-[300px] md:h-[400px] bg-cover bg-center page-content" style="background-image: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1920&q=80');">
        <div class="hero-overlay absolute inset-0 bg-blue-900 bg-opacity-60"></div>
        <div class="relative z-10 container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-center text-white">
                <h1 id="hero-title" class="text-4xl md:text-5xl lg:text-6xl font-bold">
                    @yield('hero-title', '<span>Informasi</span><div class="w-24 h-1 bg-white mx-auto my-3"></div><span>Berita</span>')
                </h1>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <div class="min-h-screen">
        @yield('content')
    </div>

    @include('partials._footer')

    <script>
        // Scroll to top on page load
        window.addEventListener('load', function() {
            window.scrollTo({ top: 0, behavior: 'instant' });
        });

        // Also scroll to top when page is shown (for back/forward navigation)
        window.addEventListener('pageshow', function(event) {
            if (event.persisted) {
                window.scrollTo({ top: 0, behavior: 'instant' });
            }
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const profilDropdown = document.getElementById('profil-dropdown');
            const profilDropdownMenu = document.getElementById('profil-dropdown-menu');
            if (profilDropdown && profilDropdownMenu && !profilDropdown.contains(event.target)) {
                profilDropdownMenu.classList.remove('show');
            }
            
            const dropdown = document.getElementById('informasi-dropdown');
            const dropdownMenu = document.getElementById('informasi-dropdown-menu');
            if (dropdown && dropdownMenu && !dropdown.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
            
            const contactDropdown = document.getElementById('contact-dropdown');
            const contactDropdownMenu = document.getElementById('contact-dropdown-menu');
            if (contactDropdown && contactDropdownMenu && !contactDropdown.contains(event.target)) {
                contactDropdownMenu.classList.remove('show');
            }
        });
    </script>
    @include('partials._navbar-scripts')
</body>
</html>
