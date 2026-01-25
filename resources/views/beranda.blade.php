<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDAM Halmahera Selatan - Beranda</title>
    
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
        .service-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #60A5FA 0%, #3B82F6 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
            margin: 0 auto 1rem;
            position: relative;
        }
        /* Dropdown Menu Styles */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            min-width: 220px;
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
    </style>
</head>
<body class="bg-gray-100">
    @include('partials._navbar')

    <!-- Hero Section -->
    <section class="relative h-[500px] md:h-[600px] bg-cover bg-center page-content" style="background-image: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1920&q=80');">
        <div class="hero-overlay absolute inset-0 bg-blue-900 bg-opacity-50"></div>
        <div class="relative z-10 container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-center text-white">
                <p class="text-yellow-400 text-base md:text-lg mb-3 font-medium">Selamat Datang Di Website Resmi</p>
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-3 leading-tight">PDAM HALMAHERA SELATAN</h1>
                <p class="text-xl md:text-2xl lg:text-3xl">MALUKU UTARA</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Service 1: Pelayanan Tarif -->
                <div class="text-center">
                    <div class="service-icon">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="absolute bottom-2 right-2 text-lg font-bold">$</span>
                    </div>
                    <h3 class="text-sm font-semibold text-gray-700">Pelayanan Tarif</h3>
                </div>
                
                <!-- Service 2: Visi Misi -->
                <div class="text-center">
                    <div class="service-icon">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <svg class="w-5 h-5 absolute bottom-2 right-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-semibold text-gray-700">Visi Misi</h3>
                </div>
                
                <!-- Service 3: Call Center -->
                <div class="text-center">
                    <div class="service-icon">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <svg class="w-5 h-5 absolute bottom-2 right-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-semibold text-gray-700">Call Center</h3>
                </div>
                
                <!-- Service 4: Berita Terbaru -->
                <div class="text-center">
                    <div class="service-icon">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-sm font-semibold text-gray-700">Berita Terbaru</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-lg shadow-md p-8 max-w-4xl mx-auto">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Tentang Kami</h2>
                <div class="space-y-4 text-gray-700 leading-relaxed">
                    <p>
                        Perusahaan Daerah Air Minum (PDAM) merupakan badan usaha milik daerah yang bergerak dalam penyediaan layanan air bersih bagi masyarakat. PDAM berkomitmen memberikan pelayanan yang aman, berkualitas, dan berkesinambungan guna mendukung kesehatan dan kesejahteraan masyarakat.
                    </p>
                    <p>
                        Dalam menjalankan tugasnya, PDAM senantiasa mengedepankan pelayanan publik, transparansi, serta peningkatan kualitas layanan secara berkelanjutan.
                    </p>
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
