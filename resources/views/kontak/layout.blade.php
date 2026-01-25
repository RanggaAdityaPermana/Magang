<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak - PDAM Halmahera Selatan</title>
    
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
        .call-center-box {
            background: #1E3A8A;
            color: white;
            padding: 32px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 24px;
        }
        .info-card {
            background: white;
            border: 1px solid #E5E7EB;
            border-radius: 8px;
            padding: 24px;
            margin-bottom: 24px;
        }
        .green-button {
            background: #10B981;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block;
            margin-bottom: 16px;
            text-decoration: none;
        }
        .green-button:hover {
            background: #059669;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }
        .pipeline-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 0;
            border-bottom: 1px solid #E5E7EB;
        }
        .pipeline-item:last-child {
            border-bottom: none;
        }
        .pipeline-icon {
            width: 24px;
            height: 24px;
            color: #3B82F6;
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
                    @yield('hero-title', 'Kontak - Call Center')
                </h1>
            </div>
        </div>
    </section>

    <!-- Main Content Area -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 max-w-7xl">
            @yield('content')
        </div>
    </section>

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
    </script>
    @include('partials._navbar-scripts')
</body>
</html>
