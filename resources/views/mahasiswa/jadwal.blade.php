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
            border-left: 4px solid #667eea;
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
                        <button class="flex items-center space-x-1 text-gray-700 hover:text-blue-600 font-medium transition-colors">
                            <a href="{{ url('/kelas') }}" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">
                                <i class="fas fa-book-open"></i>
                                <span>Kelas Akademik</span>
                            </a>
                        </button>

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
                                C
                            </span>
                            <span class="font-medium">Chaya</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="dropdown-menu absolute top-full right-0 mt-2 w-56 bg-white rounded-xl shadow-xl border border-gray-100">
                            <div class="p-4">
                                <div class="px-4 py-3 border-b border-gray-100">
                                    <p class="font-medium text-gray-900">Chaya Dewi</p>
                                    <p class="text-sm text-gray-500">chaya@student.ac.id</p>
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
    <div class="max-w-7xl mx-auto px-6 py-8">
        <!-- Judul Halaman -->
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Jadwal Mata Kuliah</h1>

        <!-- Jadwal Hari Ini -->
        <section class="bg-white shadow-sm rounded-2xl p-6 mb-10 border border-gray-200">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-800">Jadwal Hari Ini</h2>
                <span class="text-sm text-gray-500">
                    {{ now()->translatedFormat('l, d F Y') }}
                </span>
            </div>

            <div class="space-y-4">
                <!-- Item Jadwal -->
                <div class="p-4 rounded-lg border-l-4 border-blue-500 bg-blue-50 hover:bg-blue-100 transition">
                    <div class="flex items-center justify-between">
                        <h3 class="font-semibold text-gray-800">Matematika Diskrit</h3>
                        <span class="text-sm font-medium text-gray-600">08:00 - 09:40</span>
                    </div>
                    <p class="text-sm text-gray-600 mt-1"><i class="fas fa-user mr-2"></i>Dr. Ahmad Sutrisno</p>
                    <p class="text-sm text-gray-600"><i class="fas fa-map-marker-alt mr-2"></i>Ruang A301</p>
                </div>

                <div class="p-4 rounded-lg border-l-4 border-green-500 bg-green-50 hover:bg-green-100 transition">
                    <div class="flex items-center justify-between">
                        <h3 class="font-semibold text-gray-800">Algoritma & Pemrograman</h3>
                        <span class="text-sm font-medium text-gray-600">10:00 - 11:40</span>
                    </div>
                    <p class="text-sm text-gray-600 mt-1"><i class="fas fa-user mr-2"></i>Prof. Sari Dewi</p>
                    <p class="text-sm text-gray-600"><i class="fas fa-map-marker-alt mr-2"></i>Lab Komputer 1</p>
                </div>

                <div class="p-4 rounded-lg border-l-4 border-purple-500 bg-purple-50 hover:bg-purple-100 transition">
                    <div class="flex items-center justify-between">
                        <h3 class="font-semibold text-gray-800">Bahasa Inggris Teknik</h3>
                        <span class="text-sm font-medium text-gray-600">13:00 - 14:40</span>
                    </div>
                    <p class="text-sm text-gray-600 mt-1"><i class="fas fa-user mr-2"></i>Ms. Jennifer Smith</p>
                    <p class="text-sm text-gray-600"><i class="fas fa-map-marker-alt mr-2"></i>Ruang B205</p>
                </div>

                <div class="p-4 rounded-lg border-l-4 border-red-500 bg-red-50 hover:bg-red-100 transition">
                    <div class="flex items-center justify-between">
                        <h3 class="font-semibold text-gray-800">Fisika Dasar</h3>
                        <span class="text-sm font-medium text-gray-600">15:00 - 16:40</span>
                    </div>
                    <p class="text-sm text-gray-600 mt-1"><i class="fas fa-user mr-2"></i>Dr. Budi Santoso</p>
                    <p class="text-sm text-gray-600"><i class="fas fa-map-marker-alt mr-2"></i>Lab Fisika</p>
                </div>
            </div>
        </section>

        <!-- Jadwal Minggu Ini -->
        <section class="bg-white shadow-sm rounded-2xl p-6 border border-gray-200">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-800">Jadwal Minggu Ini</h2>
                <button class="text-blue-600 hover:underline text-sm">Lihat Kalender</button>
            </div>

            <!-- Kalender Mingguan (Contoh Grid) -->
            <div class="grid grid-cols-7 gap-4 text-center">
                <div>
                    <p class="text-sm text-gray-500">Senin</p>
                    <div class="font-semibold">Database</div>
                    <span class="text-xs text-gray-600">08:00</span>
                </div>
                <div class="bg-blue-100 rounded-lg p-2">
                    <p class="text-sm text-blue-700">Selasa</p>
                    <div class="font-semibold">Matematika</div>
                    <span class="text-xs text-blue-600">08:00</span>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Rabu</p>
                    <div class="font-semibold">Statistika</div>
                    <span class="text-xs text-gray-600">09:00</span>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Kamis</p>
                    <div class="font-semibold">AI & ML</div>
                    <span class="text-xs text-gray-600">08:00</span>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Jumat</p>
                    <div class="font-semibold">Praktikum DB</div>
                    <span class="text-xs text-gray-600">08:00</span>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Sabtu</p>
                    <div class="font-semibold">Study Group</div>
                    <span class="text-xs text-gray-600">10:00</span>
                </div>
                <div>
                    <p class="text-sm text-gray-500">Minggu</p>
                    <div class="font-semibold">Free Learning</div>
                    <span class="text-xs text-gray-600">Fleksibel</span>
                </div>
            </div>
        </section>
    </div>

