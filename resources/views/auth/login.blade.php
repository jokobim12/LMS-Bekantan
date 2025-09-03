<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS Bekantan - Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #22d3ee 0%, #06b6d4 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        /* Background decorative elements */
        .floating-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .floating-element {
            position: absolute;
            opacity: 0.1;
            animation: floatBg 15s ease-in-out infinite;
        }

        .floating-circle {
            border-radius: 50%;
            border: 2px solid white;
        }

        .floating-square {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
        }

        .floating-triangle {
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 26px solid rgba(255, 255, 255, 0.2);
        }

        .element-1 {
            width: 60px;
            height: 60px;
            top: 15%;
            left: 10%;
            animation-delay: 0s;
        }

        .element-2 {
            width: 40px;
            height: 40px;
            top: 25%;
            right: 20%;
            animation-delay: -2s;
        }

        .element-3 {
            top: 45%;
            left: 5%;
            animation-delay: -4s;
        }

        .element-4 {
            width: 80px;
            height: 80px;
            bottom: 30%;
            right: 15%;
            animation-delay: -6s;
        }

        .element-5 {
            width: 30px;
            height: 30px;
            bottom: 20%;
            left: 15%;
            animation-delay: -8s;
        }

        .element-6 {
            top: 60%;
            right: 5%;
            animation-delay: -10s;
        }

        .element-7 {
            width: 50px;
            height: 50px;
            top: 70%;
            left: 25%;
            animation-delay: -12s;
        }

        .element-8 {
            width: 35px;
            height: 35px;
            top: 10%;
            right: 40%;
            animation-delay: -14s;
        }

        @keyframes floatBg {
            0%, 100% { 
                transform: translateY(0px) translateX(0px) rotate(0deg); 
            }
            25% { 
                transform: translateY(-20px) translateX(10px) rotate(90deg); 
            }
            50% { 
                transform: translateY(-10px) translateX(-15px) rotate(180deg); 
            }
            75% { 
                transform: translateY(-30px) translateX(5px) rotate(270deg); 
            }
        }

        .login-header {
            position: fixed;
            top: 20px;
            left: 20px;
            color: white;
            font-size: 18px;
            font-weight: 500;
            opacity: 0.8;
            z-index: 10;
        }

        .container {
            display: flex;
            background: white;
            border-radius: 15px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
            min-height: 500px;
            z-index: 2;
            position: relative;
        }

        /* Left Side - Photo with Text Overlay */
        .left-side {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px;
            color: white;
            position: relative;
            overflow: hidden;
            background-image: linear-gradient(rgba(8, 145, 178, 0.7), rgba(14, 116, 144, 0.8)),
                              url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .logo-section {
            text-align: center;
            margin-bottom: 30px;
            z-index: 2;
            position: relative;
        }

        .logo-circle {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .logo-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%; /* ini bikin gambar benar-benar bulat */
        }


        .logo-text {
            font-size: 20px;
            font-weight: 700;
            color: white;
            margin-bottom: 5px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .logo-subtext {
            font-size: 16px;
            color: white;
            font-weight: 400;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .bekantan {
            color: gray; /* abu-abu */
            font-weight: bold; /* optional */
        }

        .jantan {
             color: black; /* hitam */
             font-weight: bold; /* optional */
        }

        .info-content {
            text-align: center;
            z-index: 2;
            position: relative;
        }

        .info-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.3;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .info-description {
            font-size: 16px;
            opacity: 0.95;
            line-height: 1.5;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        /* Right Side - Login Form */
        .right-side {
            flex: 1;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: white;
            z-index: 2;
            position: relative;
        }

        .form-header {
            text-align: left;
            margin-bottom: 40px;
        }

        .form-title {
            font-size: 24px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 8px;
        }

        .form-subtitle {
            color: #6b7280;
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #374151;
            font-weight: 500;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f9fafb;
            color: #1f2937;
        }

        .form-group input:focus {
            outline: none;
            border-color: #06b6d4;
            background: white;
            box-shadow: 0 0 0 3px rgba(6, 182, 212, 0.1);
        }

        .form-group input::placeholder {
            color: #9ca3af;
        }

        .forgot-link {
            text-align: right;
            margin-top: 8px;
        }

        .forgot-link a {
            color: #06b6d4;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .forgot-link a:hover {
            color: #0891b2;
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(6, 182, 212, 0.3);
            background: linear-gradient(135deg, #0891b2 0%, #0e7490 100%);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                margin: 20px;
                max-width: 400px;
            }

            .left-side {
                padding: 40px 30px;
                min-height: 250px;
            }

            .info-title {
                font-size: 20px;
            }

            .info-description {
                font-size: 14px;
            }

            .right-side {
                padding: 40px 30px;
            }

            .login-header {
                display: none;
            }
        }
    </style>
</head>
<body>

    <!-- Floating background elements - moved to back -->
    <div class="floating-bg">
        <div class="floating-element floating-circle element-1"></div>
        <div class="floating-element floating-square element-2"></div>
        <div class="floating-element floating-triangle element-3"></div>
        <div class="floating-element floating-circle element-4"></div>
        <div class="floating-element floating-square element-5"></div>
        <div class="floating-element floating-triangle element-6"></div>
        <div class="floating-element floating-circle element-7"></div>
        <div class="floating-element floating-square element-8"></div>
    </div>

    <div class="container">
        <!-- Left Side - Photo with Text Overlay -->
        <div class="left-side">
            <div class="logo-section">
                <div class="logo-circle">
                    <img src="{{ asset('FOTO/LOGO.jpeg') }}" alt="Logo">
                </div>
                <div class="logo-text">
                    <span class="bekantan">BEKANTAN</span><span class="jantan">JANTAN</span>
                </div>
            </div>

            <div class="info-content">
                <h1 class="info-title">Tempat Belajar & Berbagi Ilmu</h1>
                <p class="info-description">Satu langkah menuju pengalaman belajar digital yang menyenangkan.</p>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="right-side">
            <div class="form-header">
                <h2 class="form-title">Selamat Datang Kembali!</h2>
                <p class="form-subtitle">Masuk ke akun Anda untuk melanjutkan pembelajaran</p>
            </div>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input 
                        type="email"    
                        id="email" 
                        name="email" 
                        placeholder="Masukkan email Anda"
                        value="{{ old('email') }}"
                        required
                    >
                    @error('email')
                        <span style="color: #ef4444; font-size: 14px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Masukkan kata sandi Anda"
                        required
                    >
                    @error('password')
                        <span style="color: #ef4444; font-size: 14px;">{{ $message }}</span>
                    @enderror
                    <div class="forgot-link">
                        <a href="{{ route('password.request') }}">Lupa kata sandi?</a>
                    </div>
                </div>

                <button type="submit" class="login-btn">Masuk ke Akun</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('input');
            
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.style.transform = 'scale(1.02)';
                });
                
                input.addEventListener('blur', function() {
                    this.style.transform = 'scale(1)';
                });
            });

            // Enhanced button interactions
            const loginBtn = document.querySelector('.login-btn');
            
            loginBtn.addEventListener('mousedown', function() {
                this.style.transform = 'translateY(1px) scale(0.98)';
            });
            
            loginBtn.addEventListener('mouseup', function() {
                this.style.transform = 'translateY(-2px) scale(1)';
            });
            
            loginBtn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });

            // Add subtle animations on load
            const container = document.querySelector('.container');
            container.style.opacity = '0';
            container.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                container.style.transition = 'all 0.6s ease';
                container.style.opacity = '1';
                container.style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
</body>
</html>
