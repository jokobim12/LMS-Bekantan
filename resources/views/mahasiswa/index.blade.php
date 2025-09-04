<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduSphere - Platform E-Learning Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #1e40af 100%, #3730a3 0%);
        }
        
        .glass-morphism {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }
        
        .card-gradient {
            background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid rgba(226, 232, 240, 0.8);
            transition: all 0.3s ease;
        }
        
        .card-gradient:hover {
            border-color: #667eea;
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.1);
        }
        
        .stat-card {
            background: linear-gradient(135deg, #1e40af 100%, #3730a3 0%);
        }
        
        .navbar-blur {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.95);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }
        
        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }
        
        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .welcome-card {
            background: linear-gradient(135deg, #1e40af 100%, #3730a3 0%);
            border-radius: 24px;
            position: relative;
            overflow: hidden;
        }
        
        .welcome-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(50%, -50%);
        }
        
        .activity-card {
            background: white;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }
        
        .activity-card:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }
        
        .schedule-item {
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
            border-left: 4px solid #1e40af;
            transition: all 0.3s ease;
        }
        
        .schedule-item:hover {
            background: linear-gradient(135deg, #1e40af 100%, #3730a3 0%);
            color: white;
            transform: translateX(8px);
        }
        
        .news-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }
        
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .progress-bar {
            background: linear-gradient(90deg, #1e40af 100%, #3730a3 0%);
            border-radius: 10px;
            height: 8px;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 navbar-blur">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-red-500 to-orange-500 rounded-xl flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-lg"></i>
                    </div>
                    <div>
                        <span class="text-xl font-bold text-gray-900">Bekantan Jantan</span>
                        <div class="text-xs text-gray-500">Learning Management System</div>
                    </div>
                </div>

                <!-- Navigation Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <!-- Beranda -->
                    <a href="{{ url('/index') }}" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">
                        <i class="fas fa-home"></i>
                        <span>Beranda</span>
                    </a>

                    <!-- Kelas Akademik -->
                    <div class="dropdown relative">
                        <button class="flex items-center space-x-1 text-gray-700 hover:text-blue-600 font-medium transition-colors">
                            <a href="{{ url('/kelas') }}" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">
                                <i class="fas fa-book-open"></i>
                                <span>Kelas Akademik</span>
                            </a>
                        </button>
                    </div>

                    <!-- Jadwal -->
                    <a href="{{ url('/jadwal') }}" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Jadwal</span>
                    </a>

                    <!-- Obrolan -->
                    <a href="{{ url('/obrolan') }}" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">
                        <i class="fas fa-comments"></i>
                        <span>Obrolan</span>
                    </a>


                    <!-- Multi Bahasa -->
                    <div class="dropdown relative">
                        <button class="flex items-center space-x-1 text-gray-700 hover:text-blue-600 font-medium transition-colors">
                            <i class="fas fa-globe"></i>
                            <span id="current-lang">ID</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="dropdown-menu absolute top-full right-0 mt-2 w-48 bg-white rounded-xl shadow-xl border border-gray-100">
                            <div class="p-4">
                                <a href="#" onclick="changeLanguage('id', 'ID')" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    🇮🇩 Bahasa Indonesia
                                </a>
                                <a href="#" onclick="changeLanguage('en', 'EN')" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    🇺🇸 English
                                </a>
                                <a href="#" onclick="changeLanguage('zh', '中文')" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    🇨🇳 中文
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Profile -->
                    <div class="dropdown relative">
                        <button class="flex items-center space-x-2 bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 transition-colors">
                            <span class="w-8 h-8 bg-white text-red-500 rounded-full flex items-center justify-center font-bold">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </span>
                            <span class="font-medium">{{ Auth::user()->name }}</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="dropdown-menu absolute top-full right-0 mt-2 w-56 bg-white rounded-xl shadow-xl border border-gray-100">
                            <div class="p-4">
                                <div class="px-4 py-3 border-b border-gray-100">
                                    <p class="font-medium text-gray-900">{{ Auth::user()->name }}</p>
                                    <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
                                </div>
                                <a href="{{ url('/profil') }}" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    <i class="fas fa-user mr-3"></i>Profil Saya
                                </a>

                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    <i class="fas fa-cog mr-3"></i>Pengaturan
                                </a>
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    <i class="fas fa-medal mr-3"></i>Prestasi
                                </a>
                                <hr class="my-2">
                                <!-- Logout -->
                                <form method="POST" action="{{ route('custom.logout') }}">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button onclick="toggleMobileMenu()" class="text-gray-700 hover:text-blue-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Welcome Section -->
            <section id="beranda" class="mb-12">
                <div class="welcome-card p-8 text-white relative">
                    <div class="relative z-10">
                        <h1 class="text-3xl font-bold mb-2">
                            Selamat Datang, {{ Auth::user()->name }}! 👋
                        </h1>
                        <p class="text-lg opacity-90">
                            Mari mulai pembelajaran yang produktif hari ini
                        </p>
                    </div>
                </div>
            </section>

            <!-- Statistics Cards -->
            <section class="mb-12">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <!-- Kelas Aktif -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover-lift">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-book-open text-blue-600 text-lg"></i>
                            </div>
                        </div>
                        <div class="text-3xl font-bold text-gray-900 mb-1">12</div>
                        <div class="text-gray-600 text-sm">Kelas Aktif</div>
                    </div>

                    <!-- Tugas Selesai -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover-lift">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-check-circle text-green-600 text-lg"></i>
                            </div>
                        </div>
                        <div class="text-3xl font-bold text-gray-900 mb-1">5</div>
                        <div class="text-gray-600 text-sm">Tugas Belum Selesai</div>
                    </div>

                    <!-- Jadwal Hari Ini -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover-lift">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-calendar-day text-yellow-600 text-lg"></i>
                            </div>
                        </div>
                        <div class="text-3xl font-bold text-gray-900 mb-1">5</div>
                        <div class="text-gray-600 text-sm">Jadwal Hari Ini</div>
                    </div>

                    <!-- Pesan Baru -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover-lift">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-envelope text-purple-600 text-lg"></i>
                            </div>
                        </div>
                        <div class="text-3xl font-bold text-gray-900 mb-1">15</div>
                        <div class="text-gray-600 text-sm">Pesan Baru</div>
                    </div>
                </div>
            </section>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Left Column - Activities & Schedule -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Recent Activities -->
                    <section class="activity-card p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-bold text-gray-900">Aktivitas Terbaru</h2>
                            <button class="text-blue-600 hover:text-blue-700 font-medium text-sm">
                                Lihat Semua
                            </button>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl">
                                <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-book text-blue-600"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-900">Tugas Matematika telah dikumpulkan</h3>
                                    <p class="text-sm text-gray-600">2 jam yang lalu</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl">
                                <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-check-circle text-green-600"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-900">Kelas Bahasa Inggris selesai</h3>
                                    <p class="text-sm text-gray-600">4 jam yang lalu</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-xl">
                                <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-comment text-purple-600"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-900">Pesan baru dari guru Fisika</h3>
                                    <p class="text-sm text-gray-600">1 hari yang lalu</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Schedule Section -->
                    <section id="jadwal" class="activity-card p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-bold text-gray-900">Jadwal Mata Kuliah Hari Ini</h2>
                            <div class="text-sm text-gray-500">
                                Selasa, 2 September 2025
                            </div>
                        </div>

                        <div class="space-y-4">
                            <!-- Schedule Item 1 -->
                            <div class="schedule-item p-4 rounded-lg">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                        <h3 class="font-semibold text-gray-900">Matematika Diskrit</h3>
                                    </div>
                                    <span class="text-sm font-medium text-gray-600">08:00 - 09:40</span>
                                </div>
                                <div class="ml-6 text-sm text-gray-600">
                                    <p><i class="fas fa-user mr-2"></i>Dr. Ahmad Sutrisno</p>
                                    <p><i class="fas fa-map-marker-alt mr-2"></i>Ruang A301</p>
                                </div>
                            </div>

                            <!-- Schedule Item 2 -->
                            <div class="schedule-item p-4 rounded-lg">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                        <h3 class="font-semibold text-gray-900">Algoritma & Pemrograman</h3>
                                    </div>
                                    <span class="text-sm font-medium text-gray-600">10:00 - 11:40</span>
                                </div>
                                <div class="ml-6 text-sm text-gray-600">
                                    <p><i class="fas fa-user mr-2"></i>Prof. Sari Dewi</p>
                                    <p><i class="fas fa-map-marker-alt mr-2"></i>Lab Komputer 1</p>
                                </div>
                            </div>

                            <!-- Schedule Item 3 -->
                            <div class="schedule-item p-4 rounded-lg">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-3 h-3 bg-purple-500 rounded-full"></div>
                                        <h3 class="font-semibold text-gray-900">Bahasa Inggris Teknik</h3>
                                    </div>
                                    <span class="text-sm font-medium text-gray-600">13:00 - 14:40</span>
                                </div>
                                <div class="ml-6 text-sm text-gray-600">
                                    <p><i class="fas fa-user mr-2"></i>Ms. Jennifer Smith</p>
                                    <p><i class="fas fa-map-marker-alt mr-2"></i>Ruang B205</p>
                                </div>
                            </div>

                            <!-- Schedule Item 4 -->
                            <div class="schedule-item p-4 rounded-lg">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                        <h3 class="font-semibold text-gray-900">Fisika Dasar</h3>
                                    </div>
                                    <span class="text-sm font-medium text-gray-600">15:00 - 16:40</span>
                                </div>
                                <div class="ml-6 text-sm text-gray-600">
                                    <p><i class="fas fa-user mr-2"></i>Dr. Budi Santoso</p>
                                    <p><i class="fas fa-map-marker-alt mr-2"></i>Lab Fisika</p>
                                </div>
                            </div>

                            <!-- Schedule Item 5 -->
                            <div class="schedule-item p-4 rounded-lg">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                        <h3 class="font-semibold text-gray-900">Praktikum Database</h3>
                                    </div>
                                    <span class="text-sm font-medium text-gray-600">17:00 - 18:40</span>
                                </div>
                                <div class="ml-6 text-sm text-gray-600">
                                    <p><i class="fas fa-user mr-2"></i>Ir. Rina Maharani</p>
                                    <p><i class="fas fa-map-marker-alt mr-2"></i>Lab Database</p>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="mt-6 grid grid-cols-2 gap-4">
                            <button class="border border-gray-300 text-gray-700 py-3 px-4 rounded-xl font-medium hover:bg-gray-50 transition-colors">
                                <i class="fas fa-calendar mr-2"></i>Lihat Kalender
                            </button>
                        </div>
                    </section>
                </div>

                <!-- Right Column - News & Progress -->
                <div class="space-y-8">
                    <!-- Academic News -->
                    <section class="activity-card p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-bold text-gray-900">Berita Akademik</h2>
                            <span class="bg-red-100 text-red-600 px-2 py-1 rounded-full text-xs font-medium">
                                7 Baru
                            </span>
                        </div>

                        <div class="space-y-4">
                            <div class="news-card p-4 border-l-4 border-red-500">
                                <div class="flex items-start justify-between mb-2">
                                    <h3 class="font-semibold text-gray-900 text-sm">
                                        Pengumuman UTS Semester Ganjil
                                    </h3>
                                    <span class="bg-red-100 text-red-600 px-2 py-1 rounded text-xs font-medium">
                                        Penting
                                    </span>
                                </div>
                                <p class="text-sm text-gray-600 mb-2">
                                    Ujian Tengah Semester akan dimulai pada tanggal 15 Oktober 2024
                                </p>
                                <div class="text-xs text-gray-500">2 jam yang lalu</div>
                            </div>

                            <div class="news-card p-4 border-l-4 border-blue-500">
                                <div class="flex items-start justify-between mb-2">
                                    <h3 class="font-semibold text-gray-900 text-sm">
                                        Workshop Coding Bootcamp
                                    </h3>
                                    <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded text-xs font-medium">
                                        Event
                                    </span>
                                </div>
                                <p class="text-sm text-gray-600 mb-2">
                                    Daftar sekarang untuk workshop programming gratis
                                </p>
                                <div class="text-xs text-gray-500">5 jam yang lalu</div>
                            </div>

                            <div class="news-card p-4 border-l-4 border-green-500">
                                <div class="flex items-start justify-between mb-2">
                                    <h3 class="font-semibold text-gray-900 text-sm">
                                        Beasiswa Prestasi Akademik
                                    </h3>
                                    <span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs font-medium">
                                        Beasiswa
                                    </span>
                                </div>
                                <p class="text-sm text-gray-600 mb-2">
                                    Pendaftaran beasiswa dibuka hingga akhir bulan
                                </p>
                                <div class="text-xs text-gray-500">1 hari yang lalu</div>
                            </div>

                            <div class="news-card p-4 border-l-4 border-yellow-500">
                                <div class="flex items-start justify-between mb-2">
                                    <h3 class="font-semibold text-gray-900 text-sm">
                                        Lomba Sains Nasional
                                    </h3>
                                    <span class="bg-yellow-100 text-yellow-600 px-2 py-1 rounded text-xs font-medium">
                                        Kompetisi
                                    </span>
                                </div>
                                <p class="text-sm text-gray-600 mb-2">
                                    Daftarkan tim Anda untuk lomba sains tingkat nasional
                                </p>
                                <div class="text-xs text-gray-500">2 hari yang lalu</div>
                            </div>
                        </div>
                    </section>

                    <!-- Progress Belajar -->
                    <section class="activity-card p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-bold text-gray-900">Progress Belajar</h2>
                            <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                                Detail
                            </button>
                        </div>

                        <div class="space-y-6">
                            <!-- Subject Progress 1 -->
                            <div class="bg-gray-50 rounded-xl p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-code text-blue-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900">Algoritma</h3>
                                            <p class="text-sm text-gray-600">85% selesai</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-lg font-bold text-gray-900">A-</div>
                                        <div class="text-sm text-gray-500">IPK: 3.7</div>
                                    </div>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="progress-bar h-2 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>

                            <!-- Subject Progress 2 -->
                            <div class="bg-gray-50 rounded-xl p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-calculator text-green-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900">Matematika</h3>
                                            <p class="text-sm text-gray-600">92% selesai</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-lg font-bold text-gray-900">A</div>
                                        <div class="text-sm text-gray-500">IPK: 4.0</div>
                                    </div>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="progress-bar h-2 rounded-full" style="width: 92%"></div>
                                </div>
                            </div>

                            <!-- Subject Progress 3 -->
                            <div class="bg-gray-50 rounded-xl p-4">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-globe text-purple-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900">Bahasa Inggris</h3>
                                            <p class="text-sm text-gray-600">78% selesai</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-lg font-bold text-gray-900">B+</div>
                                        <div class="text-sm text-gray-500">IPK: 3.5</div>
                                    </div>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="progress-bar h-2 rounded-full" style="width: 78%"></div>
                                </div>
                            </div>

                            <!-- Overall GPA -->
                            <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl p-4 text-white">
                                <div class="text-center">
                                    <h3 class="text-lg font-semibold mb-2">IPK Kumulatif</h3>
                                    <div class="text-3xl font-bold mb-1">3.74</div>
                                    <div class="text-sm opacity-90">Semester 5 | Cumlaude Track</div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <!-- Weekly Schedule Overview -->
            <section class="mt-12">
                <div class="activity-card p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-900">Jadwal Minggu Ini</h2>
                        <div class="flex space-x-2">
                            <button class="bg-blue-100 text-blue-600 px-4 py-2 rounded-lg font-medium hover:bg-blue-200 transition-colors">
                                <i class="fas fa-calendar-week mr-2"></i>Minggu Ini
                            </button>
                            <button class="border border-gray-300 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-50 transition-colors">
                                <i class="fas fa-calendar-month mr-2"></i>Bulan Ini
                            </button>
                        </div>
                    </div>

                    <!-- Weekly Calendar -->
                    <div class="overflow-x-auto">
                        <div class="min-w-full">
                            <div class="grid grid-cols-7 gap-4 mb-4">
                                <!-- Day Headers -->
                                <div class="text-center">
                                    <div class="text-sm font-medium text-gray-500 mb-2">Senin</div>
                                    <div class="text-lg font-bold text-gray-900">1</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-sm font-medium text-gray-500 mb-2">Selasa</div>
                                    <div class="text-lg font-bold bg-blue-600 text-white w-8 h-8 rounded-full mx-auto flex items-center justify-center">2</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-sm font-medium text-gray-500 mb-2">Rabu</div>
                                    <div class="text-lg font-bold text-gray-900">3</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-sm font-medium text-gray-500 mb-2">Kamis</div>
                                    <div class="text-lg font-bold text-gray-900">4</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-sm font-medium text-gray-500 mb-2">Jumat</div>
                                    <div class="text-lg font-bold text-gray-900">5</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-sm font-medium text-gray-500 mb-2">Sabtu</div>
                                    <div class="text-lg font-bold text-gray-900">6</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-sm font-medium text-gray-500 mb-2">Minggu</div>
                                    <div class="text-lg font-bold text-gray-900">7</div>
                                </div>
                            </div>

                            <!-- Schedule Events -->
                            <div class="grid grid-cols-7 gap-4">
                                <!-- Monday -->
                                <div class="space-y-2">
                                    <div class="bg-blue-100 border-l-4 border-blue-500 p-2 rounded text-xs">
                                        <div class="font-medium text-blue-800">Database</div>
                                        <div class="text-blue-600">08:00-09:40</div>
                                    </div>
                                    <div class="bg-green-100 border-l-4 border-green-500 p-2 rounded text-xs">
                                        <div class="font-medium text-green-800">Web Programming</div>
                                        <div class="text-green-600">10:00-11:40</div>
                                    </div>
                                </div>

                                <!-- Tuesday (Today) -->
                                <div class="space-y-2 bg-blue-50 p-2 rounded-lg border-2 border-blue-200">
                                    <div class="bg-blue-100 border-l-4 border-blue-500 p-2 rounded text-xs">
                                        <div class="font-medium text-blue-800">Matematika</div>
                                        <div class="text-blue-600">08:00-09:40</div>
                                    </div>
                                    <div class="bg-green-100 border-l-4 border-green-500 p-2 rounded text-xs">
                                        <div class="font-medium text-green-800">Algoritma</div>
                                        <div class="text-green-600">10:00-11:40</div>
                                    </div>
                                    <div class="bg-purple-100 border-l-4 border-purple-500 p-2 rounded text-xs">
                                        <div class="font-medium text-purple-800">B. Inggris</div>
                                        <div class="text-purple-600">13:00-14:40</div>
                                    </div>
                                    <div class="bg-red-100 border-l-4 border-red-500 p-2 rounded text-xs">
                                        <div class="font-medium text-red-800">Fisika</div>
                                        <div class="text-red-600">15:00-16:40</div>
                                    </div>
                                </div>

                                <!-- Wednesday -->
                                <div class="space-y-2">
                                    <div class="bg-purple-100 border-l-4 border-purple-500 p-2 rounded text-xs">
                                        <div class="font-medium text-purple-800">Statistika</div>
                                        <div class="text-purple-600">09:00-10:40</div>
                                    </div>
                                    <div class="bg-orange-100 border-l-4 border-orange-500 p-2 rounded text-xs">
                                        <div class="font-medium text-orange-800">Jaringan</div>
                                        <div class="text-orange-600">13:00-14:40</div>
                                    </div>
                                </div>

                                <!-- Thursday -->
                                <div class="space-y-2">
                                    <div class="bg-indigo-100 border-l-4 border-indigo-500 p-2 rounded text-xs">
                                        <div class="font-medium text-indigo-800">AI & ML</div>
                                        <div class="text-indigo-600">08:00-09:40</div>
                                    </div>
                                    <div class="bg-pink-100 border-l-4 border-pink-500 p-2 rounded text-xs">
                                        <div class="font-medium text-pink-800">Seminar</div>
                                        <div class="text-pink-600">14:00-15:40</div>
                                    </div>
                                </div>

                                <!-- Friday -->
                                <div class="space-y-2">
                                    <div class="bg-yellow-100 border-l-4 border-yellow-500 p-2 rounded text-xs">
                                        <div class="font-medium text-yellow-800">Praktikum DB</div>
                                        <div class="text-yellow-600">08:00-11:40</div>
                                    </div>
                                </div>

                                <!-- Saturday -->
                                <div class="space-y-2">
                                    <div class="bg-gray-100 border-l-4 border-gray-500 p-2 rounded text-xs">
                                        <div class="font-medium text-gray-800">Study Group</div>
                                        <div class="text-gray-600">10:00-12:00</div>
                                    </div>
                                </div>

                                <!-- Sunday -->
                                <div class="space-y-2">
                                    <div class="bg-blue-100 border-l-4 border-blue-500 p-2 rounded text-xs">
                                        <div class="font-medium text-blue-800">Free Learning</div>
                                        <div class="text-blue-600">Fleksibel</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Upcoming Deadlines -->
            <section class="mt-8">
                <div class="activity-card p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-900">Deadline Mendatang</h2>
                        <button class="text-blue-600 hover:text-blue-700 font-medium">
                            Lihat Semua
                        </button>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Deadline 1 -->
                        <div class="bg-red-50 border border-red-200 rounded-xl p-4">
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-exclamation-triangle text-red-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-red-900">Tugas Algoritma</h3>
                                        <p class="text-sm text-red-700">Sorting & Searching</p>
                                    </div>
                                </div>
                                <span class="bg-red-200 text-red-800 px-2 py-1 rounded text-xs font-medium">
                                    2 hari
                                </span>
                            </div>
                            <div class="text-xs text-red-600">
                                Deadline: 4 September 2025, 23:59
                            </div>
                        </div>

                        <!-- Deadline 2 -->
                        <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-4">
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-clock text-yellow-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-yellow-900">Project Database</h3>
                                        <p class="text-sm text-yellow-700">ERD & Implementation</p>
                                    </div>
                                </div>
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded text-xs font-medium">
                                    5 hari
                                </span>
                            </div>
                            <div class="text-xs text-yellow-600">
                                Deadline: 7 September 2025, 23:59
                            </div>
                        </div>

                        <!-- Deadline 3 -->
                        <div class="bg-green-50 border border-green-200 rounded-xl p-4">
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-check-circle text-green-600"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-green-900">Essay B. Inggris</h3>
                                        <p class="text-sm text-green-700">Technology Impact</p>
                                    </div>
                                </div>
                                <span class="bg-green-200 text-green-800 px-2 py-1 rounded text-xs font-medium">
                                    1 minggu
                                </span>
                            </div>
                            <div class="text-xs text-green-600">
                                Deadline: 10 September 2025, 23:59
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- JavaScript -->
    <script>
        // Toggle Mobile Menu
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }

        // Change Language
        function changeLanguage(code, name) {
            document.getElementById('current-lang').textContent = code;
            // Here you would typically implement actual language switching
            console.log('Language changed to:', name);
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.hover-lift, .activity-card, .news-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Real-time clock
        function updateClock() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('id-ID', {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
            
            // Update if there's a clock element
            const clockElement = document.getElementById('current-time');
            if (clockElement) {
                clockElement.textContent = timeString;
            }
        }

        setInterval(updateClock, 1000);
        updateClock();

        // Notification system
        function showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = `fixed top-20 right-4 z-50 p-4 rounded-lg shadow-lg transition-all duration-300 transform translate-x-full`;
            
            const bgColors = {
                'info': 'bg-blue-500',
                'success': 'bg-green-500',
                'warning': 'bg-yellow-500',
                'error': 'bg-red-500'
            };
            
            notification.classList.add(bgColors[type] || bgColors['info']);
            notification.innerHTML = `
                <div class="flex items-center text-white">
                    <i class="fas fa-info-circle mr-2"></i>
                    <span>${message}</span>
                    <button onclick="this.parentElement.parentElement.remove()" class="ml-4 hover:bg-white hover:bg-opacity-20 rounded p-1">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            `;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.classList.remove('translate-x-full');
            }, 100);
            
            setTimeout(() => {
                notification.classList.add('translate-x-full');
                setTimeout(() => {
                    notification.remove();
                }, 300);
            }, 3000);
        }

        // Progressive Web App features
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then(registration => {
                        console.log('SW registered: ', registration);
                    })
                    .catch(registrationError => {
                        console.log('SW registration failed: ', registrationError);
                    });
            });
        }
    </script>
</body>
</html>