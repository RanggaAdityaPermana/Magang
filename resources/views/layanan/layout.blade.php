<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan - PDAM Halmahera Selatan</title>
    
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
        .table-custom {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .table-custom th {
            background: #F3F4F6;
            padding: 12px 16px;
            text-align: left;
            font-weight: 600;
            color: #1F2937;
            border: 1px solid #D1D5DB;
            font-size: 14px;
        }
        .table-custom td {
            padding: 12px 16px;
            border: 1px solid #D1D5DB;
            color: #1F2937;
            font-size: 14px;
            background: white;
        }
        .table-custom tr:hover {
            background: #F9FAFB;
        }
        .table-custom {
            border: 1px solid #D1D5DB;
            border-collapse: collapse;
        }
        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #D1D5DB;
            border-radius: 6px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: white;
        }
        .form-input:focus {
            outline: none;
            border-color: #3B82F6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #1F2937;
            font-size: 14px;
        }
        .submit-button {
            background: #10B981;
            color: white;
            padding: 12px 32px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .submit-button:hover {
            background: #059669;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
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
    </style>
</head>
<body class="bg-gray-100">
    @include('partials._navbar')

    <!-- Main Content -->
    <main class="w-full">
        @yield('content')
    </main>

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
