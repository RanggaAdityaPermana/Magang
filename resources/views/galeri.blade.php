<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galeri - PDAM Halmahera Selatan</title>
    
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
        .group:hover .dropdown-menu {
            display: block;
        }
        @media (max-width: 768px) {
            .group:hover .dropdown-menu {
                display: none;
            }
        }
        .gallery-item {
            aspect-ratio: 16 / 9;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #E5E7EB;
            background: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .gallery-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-100">
    @include('partials._navbar')

    <!-- Hero Section -->
    <section class="relative h-[300px] md:h-[400px] bg-cover bg-center page-content" style="background-image: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1920&q=80');">
        <div class="hero-overlay absolute inset-0 bg-blue-900 bg-opacity-60"></div>
        <div class="relative z-10 container mx-auto px-4 h-full flex items-center">
            <div class="text-white">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold">Galeri</h1>
            </div>
        </div>
    </section>

    <!-- Main Content Area -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4 max-w-7xl">
            <!-- Gallery Button -->
            <div class="text-center mb-12">
                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-8 rounded-lg text-lg transition-colors duration-300">
                    Galeri
                </button>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Gallery Item 1 -->
                <div class="gallery-item rounded-lg">
                    <span class="text-black font-bold text-lg">FOTO / VIDEO</span>
                </div>
                <!-- Gallery Item 2 -->
                <div class="gallery-item rounded-lg">
                    <span class="text-black font-bold text-lg">FOTO / VIDEO</span>
                </div>
                <!-- Gallery Item 3 -->
                <div class="gallery-item rounded-lg">
                    <span class="text-black font-bold text-lg">FOTO / VIDEO</span>
                </div>
                <!-- Gallery Item 4 -->
                <div class="gallery-item rounded-lg">
                    <span class="text-black font-bold text-lg">FOTO / VIDEO</span>
                </div>
                <!-- Gallery Item 5 -->
                <div class="gallery-item rounded-lg">
                    <span class="text-black font-bold text-lg">FOTO / VIDEO</span>
                </div>
                <!-- Gallery Item 6 -->
                <div class="gallery-item rounded-lg">
                    <span class="text-black font-bold text-lg">FOTO / VIDEO</span>
                </div>
            </div>
        </div>
    </section>

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
    </script>
    @include('partials._navbar-scripts')
</body>
</html>
