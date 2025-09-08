<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS Bekantan - Login</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="/images/logo-bekantan.png">
    <style>
        /* Custom Glassmorphism Blur */
        .glass {
            background: rgba(255,255,255,0.18);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.18);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 18px;
            border: 1.5px solid rgba(255,255,255,0.32);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-800 via-blue-500 to-blue-300">
    <!-- Background Blob (Dekorasi) -->
    <div class="absolute top-0 left-0 w-80 h-80 bg-blue-400 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-700 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-pulse"></div>
    
    <!-- Container Utama -->
    <div class="relative z-10 w-full max-w-4xl mx-auto flex flex-col md:flex-row items-center justify-center shadow-xl glass overflow-hidden">
        <!-- Left Side - Info + Logo -->
        <div class="hidden md:flex flex-col items-center justify-center bg-gradient-to-b from-blue-600 to-blue-400 w-1/2 h-full py-12 px-8 text-white relative">
            <img src="/images/logo-bekantan.png" alt="Logo LMS Bekantan" class="w-24 h-24 mb-4 drop-shadow-xl rounded-full bg-white bg-opacity-80 p-2">
            <h1 class="text-3xl font-extrabold tracking-wide mb-2">LMS Bekantan</h1>
            <p class="text-lg font-medium opacity-90 mb-6 text-center">
                Platform e-learning & CBT Politala<br>
                Kolaborasi. Inovasi. Prestasi.
            </p>
            <div class="flex gap-3 mt-8 opacity-70">
                <span class="text-xs">© 2025 Joko Bimantaro</span>
                <span class="text-xs">v1.0</span>
            </div>
            <div class="absolute bottom-3 left-1/2 -translate-x-1/2 text-xs opacity-40">Powered by Laravel + Tailwind</div>
        </div>
        <!-- Right Side - Login Form -->
        <div class="flex-1 w-full py-10 px-6 md:px-12 bg-white/70 glass">
            <div class="mb-8 text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-blue-800 mb-1">Selamat Datang Kembali!</h2>
                <p class="text-gray-500">Masuk ke akun Anda untuk melanjutkan pembelajaran</p>
            </div>
            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                <!-- Email Input -->
                <div>
                    <label for="email" class="block mb-1 font-semibold text-blue-900">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Masukkan email Anda"
                        value="{{ old('email') }}"
                        required
                        class="w-full px-4 py-3 rounded-xl border border-blue-200 bg-blue-50 focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-300 text-blue-900 shadow-sm outline-none transition"
                    >
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Password Input -->
                <div>
                    <label for="password" class="block mb-1 font-semibold text-blue-900">Kata Sandi</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan kata sandi Anda"
                        required
                        class="w-full px-4 py-3 rounded-xl border border-blue-200 bg-blue-50 focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-300 text-blue-900 shadow-sm outline-none transition"
                    >
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    <div class="text-right mt-1">
                        <a href="{{ route('password.request') }}" class="text-xs text-blue-500 hover:underline transition">Lupa kata sandi?</a>
                    </div>
                </div>
                <button type="submit" class="w-full py-3 rounded-xl bg-gradient-to-r from-blue-600 to-blue-400 text-white font-bold text-lg shadow-md hover:from-blue-700 hover:to-blue-500 transition mb-2">Masuk ke Akun</button>
            </form>

            <!-- Separator -->
            <div class="relative my-7 text-center">
                <span class="bg-white/80 px-3 text-gray-400 text-sm relative z-10">Atau masuk dengan</span>
                <div class="absolute left-0 right-0 top-1/2 -translate-y-1/2 border-t border-blue-100"></div>
            </div>

            <!-- Tombol Google -->
            <a href="{{ route('auth.google') }}"
                class="w-full flex items-center justify-center gap-3 py-3 px-2 rounded-xl border border-blue-200 bg-white shadow hover:shadow-lg transition font-semibold text-blue-700 text-base mb-2"
                style="box-shadow:0 2px 8px rgba(59,130,246,0.05);">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Logo_2013_Google.png" class="w-6 h-6" alt="Google">
                Login dengan Google
            </a>
        </div>
    </div>
</body>
</html>
