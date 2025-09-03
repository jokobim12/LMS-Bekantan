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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
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
    <h1 class="text-3xl font-bold mb-8 text-gray-800">Kelas Akademik</h1>

    @if($mataKuliah->isEmpty())
        <div class="p-6 bg-yellow-50 border-l-4 border-yellow-400 text-yellow-800 rounded-lg">
            Belum ada mata kuliah yang tersedia.
        </div>
    @else
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($mataKuliah as $mk)
                <div class="group bg-white border rounded-2xl shadow-sm hover:shadow-xl transition transform hover:-translate-y-1">
                    <!-- Header -->
                    <div class="p-6 border-b bg-gradient-to-r from-blue-500 to-indigo-500 text-white rounded-t-2xl">
                        <h2 class="text-lg font-bold">{{ $mk->nama }}</h2>
                        <p class="text-sm opacity-80">Kode: {{ $mk->mkId }}</p>
                    </div>

                    <!-- Body -->
                    <div class="p-6 space-y-3">
                        <p class="text-gray-600 flex items-center">
                            <i class="fas fa-layer-group text-blue-500 mr-2"></i>
                            Semester: <span class="ml-1 font-medium">{{ $mk->semester ?? '-' }}</span>
                        </p>
                        <p class="text-gray-600 flex items-center">
                            <i class="fas fa-book text-green-500 mr-2"></i>
                            SKS Teori: <span class="ml-1 font-medium">{{ $mk->sksTeori ?? 0 }}</span>
                        </p>
                        <p class="text-gray-600 flex items-center">
                            <i class="fas fa-flask text-purple-500 mr-2"></i>
                            SKS Praktikum: <span class="ml-1 font-medium">{{ $mk->sksPraktikum ?? 0 }}</span>
                        </p>
                    </div>

                    <!-- Footer -->
                    <div class="p-4 bg-gray-50 rounded-b-2xl flex justify-end">
                        <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            Lihat Detail
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</body>
</html>


