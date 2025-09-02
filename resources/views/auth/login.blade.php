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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Background decorative elements */
        .bg-decoration {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 6s ease-in-out infinite;
        }

        .circle:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .circle:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 70%;
            left: 80%;
            animation-delay: 2s;
        }

        .circle:nth-child(3) {
            width: 60px;
            height: 60px;
            top: 40%;
            left: 5%;
            animation-delay: 4s;
        }

        .circle:nth-child(4) {
            width: 100px;
            height: 100px;
            top: 20%;
            right: 10%;
            animation-delay: 1s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        /* Dots pattern */
        .dots {
            position: absolute;
            width: 200px;
            height: 200px;
            background-image: radial-gradient(circle, rgba(255,255,255,0.2) 2px, transparent 2px);
            background-size: 20px 20px;
            top: 60%;
            left: 15%;
            animation: float 8s ease-in-out infinite;
        }

        /* Main container */
        .container {
            display: flex;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 900px;
            max-width: 95%;
            min-height: 500px;
            position: relative;
            z-index: 2;
        }

        /* Left side - Illustration */
        .left-side {
            flex: 1;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px;
            position: relative;
            color: white;
        }

        .illustration {
            width: 280px;
            height: 280px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
            position: relative;
        }

        .monkey-icon {
            width: 120px;
            height: 120px;
            background: #2563eb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            color: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .welcome-text {
            text-align: center;
        }

        .welcome-text h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .welcome-text p {
            font-size: 16px;
            opacity: 0.9;
            line-height: 1.5;
        }

        /* Right side - Login form */
        .right-side {
            flex: 1;
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logo-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: #2563eb;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 18px;
        }

        .logo h2 {
            color: #1e40af;
            font-size: 24px;
            font-weight: 700;
        }

        .subtitle {
            color: #6b7280;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #374151;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f9fafb;
        }

        .form-group input:focus {
            outline: none;
            border-color: #2563eb;
            background: white;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.3);
        }

        .forgot-password {
            text-align: center;
            margin-top: 20px;
        }

        .forgot-password a {
            color: #2563eb;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .forgot-password a:hover {
            color: #1d4ed8;
            text-decoration: underline;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            color: #6b7280;
            font-size: 12px;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                width: 95%;
                max-width: 400px;
            }

            .left-side {
                padding: 30px;
                min-height: 200px;
            }

            .illustration {
                width: 150px;
                height: 150px;
                margin-bottom: 20px;
            }

            .monkey-icon {
                width: 80px;
                height: 80px;
                font-size: 40px;
            }

            .welcome-text h1 {
                font-size: 20px;
            }

            .right-side {
                padding: 40px 30px;
            }
        }

        /* Floating elements animation */
        .floating-element {
            position: absolute;
            opacity: 0.3;
        }

        .floating-book {
            top: 20%;
            right: 20%;
            width: 30px;
            height: 30px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 4px;
            animation: float 5s ease-in-out infinite;
        }

        .floating-graduation {
            bottom: 30%;
            left: 20%;
            width: 35px;
            height: 35px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: float 7s ease-in-out infinite reverse;
        }
    </style>
</head>
<body>
    <div class="bg-decoration">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="dots"></div>
    </div>

    <div class="container">
        <!-- Left Side - Illustration -->
        <div class="left-side">
            <div class="illustration">
                <div class="monkey-icon">🐒</div>
                <div class="floating-book floating-element"></div>
                <div class="floating-graduation floating-element"></div>
            </div>
            <div class="welcome-text">
                <h1>Selamat Datang!</h1>
                <p>Bergabunglah dengan platform pembelajaran online yang mudah dan interaktif</p>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="right-side">
            <div class="logo-section">
                <div class="logo">
                    <div class="logo-icon">🐒</div>
                    <h2>LMS Bekantan</h2>
                </div>
                <p class="subtitle">Masuk ke akun Anda</p>
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
                    <label for="password">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Masukkan password Anda"
                        required
                    >
                    @error('password')
                        <span style="color: #ef4444; font-size: 14px;">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="login-btn">Masuk</button>
            </form>

            <div class="forgot-password">
                <a href="{{ route('password.request') }}">Lupa kata sandi?</a>
            </div>

            <div class="footer">
                <p>&copy; 2025 LMS Bekantan. All rights reserved.</p>
            </div>
        </div>
    </div>

    <script>
        // Add some interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('input');
            
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'translateY(-2px)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'translateY(0)';
                });
            });

            // Add hover effect to login button
            const loginBtn = document.querySelector('.login-btn');
            loginBtn.addEventListener('mouseenter', function() {
                this.style.background = 'linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%)';
            });
            
            loginBtn.addEventListener('mouseleave', function() {
                this.style.background = 'linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%)';
            });
        });
    </script>
</body>
</html>