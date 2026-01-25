<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil - PDAM Halmahera Selatan</title>
    
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
        .section-icon {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            position: relative;
        }
        .visi-icon {
            background: linear-gradient(135deg, #3B82F6 0%, #10B981 100%);
        }
        .misi-icon {
            background: linear-gradient(135deg, #3B82F6 0%, #2563EB 100%);
        }
        .visi-button {
            background: #10B981;
            color: white;
            font-weight: 600;
            padding: 12px 32px;
            border-radius: 8px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .visi-button:hover {
            background: #059669;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }
        .misi-button {
            background: #3B82F6;
            color: white;
            font-weight: 600;
            padding: 12px 32px;
            border-radius: 8px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .misi-button:hover {
            background: #2563EB;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }
        .content-box {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 48px 56px;
            max-width: 1000px;
            margin: 0 auto;
        }
        @media (max-width: 768px) {
            .content-box {
                padding: 32px 24px;
            }
        }
        .sejarah-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1F2937;
            text-align: center;
            margin-bottom: 2rem;
            letter-spacing: -0.5px;
        }
        .sejarah-image {
            width: 100%;
            border-radius: 12px;
            margin: 2rem 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
            animation: fadeIn 0.5s ease-in;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /* Dropdown Menu Styles */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            min-width: 200px;
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
            .dropdown-menu {
                position: fixed;
                left: 50%;
                transform: translateX(-50%);
                width: 90%;
                max-width: 300px;
            }
        }
        .mobile-dropdown {
            display: none;
        }
        @media (max-width: 768px) {
            .mobile-dropdown {
                display: block;
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    @include('partials._navbar')
    
    <!-- Mobile Menu for Profile (custom) -->
    <div id="mobile-menu-profile" class="hidden md:hidden bg-blue-900 border-t border-blue-800">
        <div class="container mx-auto px-4 py-4">
            <div class="space-y-2">
                <a href="/" class="block px-4 py-2 text-white hover:bg-blue-800 rounded">Beranda</a>
                <div class="px-4 py-2">
                    <button onclick="toggleMobileDropdown()" class="w-full flex items-center justify-between text-white hover:text-blue-200">
                        <span>Profil</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="mobile-dropdown-arrow">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                    </button>
                    <div id="mobile-dropdown-menu" class="hidden mt-2 space-y-1 pl-4">
                        <a href="/profile/visi-misi" class="block px-4 py-2 text-sm text-gray-300 hover:bg-blue-800 hover:text-white rounded">Visi & Misi</a>
                        <a href="/profile/tentang-kami" class="block px-4 py-2 text-sm text-gray-300 hover:bg-blue-800 hover:text-white rounded">Tentang Kami</a>
                        <a href="/profile/sejarah" class="block px-4 py-2 text-sm text-gray-300 hover:bg-blue-800 hover:text-white rounded">Sejarah</a>
                        <a href="/profile/struktur-organisasi" class="block px-4 py-2 text-sm text-gray-300 hover:bg-blue-800 hover:text-white rounded">Struktur Organisasi</a>
                    </div>
                </div>
                <a href="/layanan" class="block px-4 py-2 text-white hover:bg-blue-800 rounded">Layanan</a>
                <a href="/informasi/berita" class="block px-4 py-2 text-white hover:bg-blue-800 rounded">Informasi</a>
                <a href="/galeri" class="block px-4 py-2 text-white hover:bg-blue-800 rounded">Galeri</a>
                <a href="/kontak" class="block px-4 py-2 text-white hover:bg-blue-800 rounded">Contact</a>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="relative h-[400px] md:h-[500px] bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1920&q=80');">
        <div class="hero-overlay absolute inset-0 bg-blue-900 bg-opacity-60"></div>
        <div class="relative z-10 container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-center text-white">
                <h1 id="hero-title" class="text-4xl md:text-5xl lg:text-6xl font-bold">
                    @yield('hero-title', '<span>Profil</span><div class="w-24 h-1 bg-white mx-auto my-3"></div><span>Tentang Kami</span>')
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
        // Scroll to top immediately on page load (before any content renders)
        if (window.history.scrollRestoration) {
            window.history.scrollRestoration = 'manual';
        }
        window.scrollTo(0, 0);

        // Scroll to top on page load
        window.addEventListener('load', function() {
            window.scrollTo({ top: 0, behavior: 'instant' });
        });

        // Scroll to top on DOMContentLoaded
        document.addEventListener('DOMContentLoaded', function() {
            window.scrollTo({ top: 0, behavior: 'instant' });
        });

        // Also scroll to top when page is shown (for back/forward navigation)
        window.addEventListener('pageshow', function(event) {
            window.scrollTo({ top: 0, behavior: 'instant' });
        });

        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId + '-menu');
            if (dropdown) {
                dropdown.classList.toggle('show');
            }
        }

        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu-profile') || document.getElementById('mobile-menu');
            if (menu) {
                menu.classList.toggle('hidden');
            }
        }

        function toggleMobileDropdown() {
            const dropdown = document.getElementById('mobile-dropdown-menu');
            const arrow = document.getElementById('mobile-dropdown-arrow');
            
            if (dropdown) {
                dropdown.classList.toggle('hidden');
                if (arrow) {
                    arrow.style.transform = dropdown.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
                }
            }
        }

        // Function to close profil dropdown
        function closeProfilDropdown() {
            const dropdown = document.getElementById('profil-dropdown-menu');
            if (dropdown) {
                dropdown.classList.remove('show');
            }
        }

        // Close dropdown when clicking outside (except for profil which uses hover)
        document.addEventListener('click', function(event) {
            const layananDropdown = document.getElementById('layanan-dropdown');
            const layananDropdownMenu = document.getElementById('layanan-dropdown-menu');
            if (layananDropdown && layananDropdownMenu && !layananDropdown.contains(event.target)) {
                layananDropdownMenu.classList.remove('show');
            }
            
            const informasiDropdown = document.getElementById('informasi-dropdown');
            const informasiDropdownMenu = document.getElementById('informasi-dropdown-menu');
            if (informasiDropdown && informasiDropdownMenu && !informasiDropdown.contains(event.target)) {
                informasiDropdownMenu.classList.remove('show');
            }
            
            // Close profil dropdown when clicking outside (but it will show again on hover)
            const profilDropdown = document.getElementById('profil-dropdown');
            const profilDropdownMenu = document.getElementById('profil-dropdown-menu');
            if (profilDropdown && profilDropdownMenu && !profilDropdown.contains(event.target)) {
                profilDropdownMenu.classList.remove('show');
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
