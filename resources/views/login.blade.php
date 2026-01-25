<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin - PDAM Halmahera Selatan</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #E0F2FE 0%, #BAE6FD 50%, #93C5FD 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
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
        
        /* Abstract wavy background pattern */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 50%, rgba(147, 197, 253, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(186, 230, 253, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(224, 242, 254, 0.4) 0%, transparent 50%);
            animation: wave 20s ease-in-out infinite;
        }
        
        @keyframes wave {
            0%, 100% {
                transform: translateY(0) scale(1);
            }
            50% {
                transform: translateY(-20px) scale(1.05);
            }
        }
        
        .login-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 450px;
            padding: 20px;
        }
        
        .logo-section {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .logo {
            width: 140px;
            height: 100px;
            margin: 0 auto 20px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .logo-m {
            position: absolute;
            width: 38px;
            height: 55px;
            background: #10B981;
            clip-path: polygon(50% 0%, 0% 100%, 50% 85%, 100% 100%);
        }
        
        .logo-m:nth-child(1) {
            left: 12px;
            top: 22px;
            transform: rotate(-18deg);
        }
        
        .logo-m:nth-child(2) {
            left: 51px;
            top: 18px;
            transform: rotate(0deg);
        }
        
        .logo-m:nth-child(3) {
            left: 90px;
            top: 22px;
            transform: rotate(18deg);
        }
        
        .logo-circle {
            position: absolute;
            width: 45px;
            height: 45px;
            background: #3B82F6;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }
        
        .logo-text {
            margin-top: 20px;
        }
        
        .logo-text h1 {
            font-size: 18px;
            font-weight: 700;
            color: #1F2937;
            letter-spacing: 2px;
            margin-bottom: 8px;
        }
        
        .logo-text h2 {
            font-size: 16px;
            font-weight: 600;
            color: #3B82F6;
            letter-spacing: 1px;
        }
        
        .login-card {
            background: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }
        
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #D1D5DB;
            border-radius: 8px;
            font-size: 14px;
            color: #1F2937;
            background: white;
            transition: all 0.3s ease;
        }
        
        .form-input::placeholder {
            color: #9CA3AF;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #3B82F6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        
        .login-button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #3B82F6 0%, #2563EB 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .login-button:hover {
            background: linear-gradient(135deg, #2563EB 0%, #1D4ED8 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
        }
        
        .login-button:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Logo Section -->
        <div class="logo-section">
            <div class="logo">
                <!-- Three M shapes (water droplets) -->
                <div class="logo-m"></div>
                <div class="logo-m"></div>
                <div class="logo-m"></div>
                <!-- Central blue circle -->
                <div class="logo-circle"></div>
            </div>
            <div class="logo-text">
                <h1>TIRTA DHARMA</h1>
                <h2>PDAM HALMERA SELATAN</h2>
            </div>
        </div>
        
        <!-- Login Card -->
        <div class="login-card page-content">
            <form method="POST" action="/login">
                @csrf
                
                <!-- Username Field -->
                <div class="form-group">
                    <input 
                        type="text" 
                        name="username" 
                        class="form-input" 
                        placeholder="Username" 
                        required 
                        autofocus
                    >
                </div>
                
                <!-- Password Field -->
                <div class="form-group">
                    <input 
                        type="password" 
                        name="password" 
                        class="form-input" 
                        placeholder="Password" 
                        required
                    >
                </div>
                
                <!-- Login Button -->
                <button type="submit" class="login-button">
                    LOGIN
                </button>
            </form>
        </div>
    </div>

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
</body>
</html>
