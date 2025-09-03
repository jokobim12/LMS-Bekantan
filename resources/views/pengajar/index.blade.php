<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Dosen - EduSphere</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #1e40af 0%, #3730a3 100%);
        }
        
        .glass-morphism {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
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
            border-color: #1e40af;
            box-shadow: 0 20px 40px rgba(30, 64, 175, 0.1);
        }
        
        .stat-card {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
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
            background: linear-gradient(135deg, #1e40af 0%, #3730a3 100%);
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
        
        .class-card {
            background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
            overflow: hidden;
        }
        
        .class-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            border-color: #1e40af;
        }
        
        .student-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 2px solid white;
            margin-left: -8px;
        }
        
        .progress-bar {
            background: linear-gradient(90deg, #1e40af 0%, #3730a3 100%);
            border-radius: 10px;
            height: 8px;
        }
        
        .grade-badge {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
        }
        
        .schedule-item {
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
            border-left: 4px solid #1e40af;
            transition: all 0.3s ease;
        }
        
        .schedule-item:hover {
            background: linear-gradient(135deg, #1e40af 0%, #3730a3 100%);
            color: white;
            transform: translateX(8px);
        }
        
        .notification-dot {
            width: 8px;
            height: 8px;
            background: #ef4444;
            border-radius: 50%;
            position: absolute;
            top: -2px;
            right: -2px;
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
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-indigo-700 rounded-xl flex items-center justify-center">
                        <i class="fas fa-chalkboard-teacher text-white text-lg"></i>
                    </div>
                    <div>
                        <span class="text-xl font-bold text-gray-900">EduSphere</span>
                        <div class="text-xs text-gray-500">Lecturer Portal</div>
                    </div>
                </div>

                <!-- Navigation Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <!-- Dashboard -->
                    <a href="#dashboard" class="flex items-center space-x-2 text-blue-600 hover:text-blue-700 font-medium transition-colors">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>

                    <!-- Kelas Saya -->
                    <div class="dropdown relative">
                        <button class="flex items-center space-x-1 text-gray-700 hover:text-blue-600 font-medium transition-colors">
                            <i class="fas fa-users-class"></i>
                            <span>Kelas Saya</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="dropdown-menu absolute top-full left-0 mt-2 w-64 bg-white rounded-xl shadow-xl border border-gray-100">
                            <div class="p-4">
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    <i class="fas fa-laptop-code mr-3 text-blue-500"></i>Algoritma & Pemrograman
                                </a>
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    <i class="fas fa-database mr-3 text-green-500"></i>Basis Data
                                </a>
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    <i class="fas fa-globe mr-3 text-purple-500"></i>Pemrograman Web
                                </a>
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    <i class="fas fa-brain mr-3 text-red-500"></i>Kecerdasan Buatan
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Penilaian -->
                    <div class="dropdown relative">
                        <button class="flex items-center space-x-1 text-gray-700 hover:text-blue-600 font-medium transition-colors relative">
                            <i class="fas fa-clipboard-check"></i>
                            <span>Penilaian</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                            <div class="notification-dot"></div>
                        </button>
                        <div class="dropdown-menu absolute top-full left-0 mt-2 w-56 bg-white rounded-xl shadow-xl border border-gray-100">
                            <div class="p-4">
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    <i class="fas fa-tasks mr-3"></i>Tugas Pending (12)
                                </a>
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    <i class="fas fa-file-alt mr-3"></i>Ujian & Quiz
                                </a>
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    <i class="fas fa-chart-bar mr-3"></i>Analisis Nilai
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Jadwal Mengajar -->
                    <a href="#schedule" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 font-medium transition-colors">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Jadwal</span>
                    </a>

                    <!-- Pesan -->
                    <a href="#messages" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 font-medium transition-colors relative">
                        <i class="fas fa-envelope"></i>
                        <span>Pesan</span>
                        <div class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full flex items-center justify-center">
                            <span class="text-xs text-white font-bold">5</span>
                        </div>
                    </a>

                    <!-- Profile -->
                    <div class="dropdown relative">
                        <button class="flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition-colors">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=32&h=32&fit=crop&crop=faces" 
                                 alt="Profile" class="w-8 h-8 rounded-full">
                            <span class="font-medium">Dr. Ahmad</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="dropdown-menu absolute top-full right-0 mt-2 w-56 bg-white rounded-xl shadow-xl border border-gray-100">
                            <div class="p-4">
                                <div class="px-4 py-3 border-b border-gray-100">
                                    <p class="font-medium text-gray-900">Dr. Ahmad Sutrisno</p>
                                    <p class="text-sm text-gray-500">Dosen Teknik Informatika</p>
                                </div>
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    <i class="fas fa-user mr-3"></i>Profil Saya
                                </a>
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    <i class="fas fa-cog mr-3"></i>Pengaturan
                                </a>
                                <a href="#" class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition-colors">
                                    <i class="fas fa-chart-line mr-3"></i>Statistik Mengajar
                                </a>
                                <hr class="my-2">
                                <a href="#" class="block px-4 py-3 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                    <i class="fas fa-sign-out-alt mr-3"></i>Keluar
                                </a>
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
            <section id="dashboard" class="mb-12">
                <div class="welcome-card p-8 text-white relative">
                    <div class="relative z-10">
                        <h1 class="text-3xl font-bold mb-2">
                            Selamat Datang, Dr. Ahmad! 👨‍🏫
                        </h1>
                        <p class="text-lg opacity-90">
                            Semangat mengajar hari ini! Ada 3 kelas dan 12 tugas menunggu untuk dinilai.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Statistics Cards -->
            <section class="mb-12">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <!-- Total Mahasiswa -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover-lift">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-user-graduate text-blue-600 text-lg"></i>
                            </div>
                        </div>
                        <div class="text-3xl font-bold text-gray-900 mb-1">156</div>
                        <div class="text-gray-600 text-sm">Total Mahasiswa</div>
                    </div>

                    <!-- Kelas Aktif -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover-lift">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-chalkboard text-green-600 text-lg"></i>
                            </div>
                        </div>
                        <div class="text-3xl font-bold text-gray-900 mb-1">4</div>
                        <div class="text-gray-600 text-sm">Kelas Aktif</div>
                    </div>

                    <!-- Tugas Pending -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover-lift">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-tasks text-yellow-600 text-lg"></i>
                            </div>
                        </div>
                        <div class="text-3xl font-bold text-gray-900 mb-1">12</div>
                        <div class="text-gray-600 text-sm">Tugas Pending</div>
                    </div>

                    <!-- Jadwal Hari Ini -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover-lift">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-calendar-day text-purple-600 text-lg"></i>
                            </div>
                        </div>
                        <div class="text-3xl font-bold text-gray-900 mb-1">3</div>
                        <div class="text-gray-600 text-sm">Kelas Hari Ini</div>
                    </div>
                </div>
            </section>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Left Column - Classes & Schedule -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- My Classes -->
                    <section class="activity-card p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-bold text-gray-900">Kelas Saya</h2>
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">
                                <i class="fas fa-plus mr-2"></i>Tambah Kelas
                            </button>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Class Card 1 -->
                            <div class="class-card rounded-xl p-6 hover-lift">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                            <i class="fas fa-laptop-code text-blue-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900">Algoritma & Pemrograman</h3>
                                            <p class="text-sm text-gray-600">IF-2023A</p>
                                        </div>
                                    </div>
                                    <span class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-xs font-medium">
                                        Aktif
                                    </span>
                                </div>

                                <div class="mb-4">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <div class="flex -space-x-2">
                                            <img class="student-avatar" src="https://images.unsplash.com/photo-1494790108755-2616b612b812?w=32&h=32&fit=crop&crop=faces" alt="Student">
                                            <img class="student-avatar" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=32&h=32&fit=crop&crop=faces" alt="Student">
                                            <img class="student-avatar" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=32&h=32&fit=crop&crop=faces" alt="Student">
                                            <div class="student-avatar bg-gray-300 flex items-center justify-center text-xs font-medium text-gray-600">+35</div>
                                        </div>
                                        <span class="text-sm text-gray-600">38 mahasiswa</span>
                                    </div>
                                    <div class="text-sm text-gray-600 mb-2">
                                        <i class="fas fa-calendar mr-2"></i>Senin & Rabu, 08:00-09:40
                                    </div>
                                    <div class="text-sm text-gray-600">
                                        <i class="fas fa-map-marker-alt mr-2"></i>Lab Komputer 1
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="text-sm">
                                        <span class="text-gray-600">Progress: </span>
                                        <span class="font-medium text-gray-900">75%</span>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="bg-blue-50 text-blue-600 px-3 py-1 rounded-lg text-sm hover:bg-blue-100 transition-colors">
                                            <i class="fas fa-eye mr-1"></i>Lihat
                                        </button>
                                        <button class="bg-gray-50 text-gray-600 px-3 py-1 rounded-lg text-sm hover:bg-gray-100 transition-colors">
                                            <i class="fas fa-cog mr-1"></i>Kelola
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Class Card 2 -->
                            <div class="class-card rounded-xl p-6 hover-lift">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                            <i class="fas fa-database text-green-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900">Basis Data</h3>
                                            <p class="text-sm text-gray-600">IF-2023B</p>
                                        </div>
                                    </div>
                                    <span class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-xs font-medium">
                                        Aktif
                                    </span>
                                </div>

                                <div class="mb-4">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <div class="flex -space-x-2">
                                            <img class="student-avatar" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=32&h=32&fit=crop&crop=faces" alt="Student">
                                            <img class="student-avatar" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=32&h=32&fit=crop&crop=faces" alt="Student">
                                            <img class="student-avatar" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=32&h=32&fit=crop&crop=faces" alt="Student">
                                            <div class="student-avatar bg-gray-300 flex items-center justify-center text-xs font-medium text-gray-600">+39</div>
                                        </div>
                                        <span class="text-sm text-gray-600">42 mahasiswa</span>
                                    </div>
                                    <div class="text-sm text-gray-600 mb-2">
                                        <i class="fas fa-calendar mr-2"></i>Selasa & Kamis, 10:00-11:40
                                    </div>
                                    <div class="text-sm text-gray-600">
                                        <i class="fas fa-map-marker-alt mr-2"></i>Ruang A301
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="text-sm">
                                        <span class="text-gray-600">Progress: </span>
                                        <span class="font-medium text-gray-900">68%</span>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="bg-green-50 text-green-600 px-3 py-1 rounded-lg text-sm hover:bg-green-100 transition-colors">
                                            <i class="fas fa-eye mr-1"></i>Lihat
                                        </button>
                                        <button class="bg-gray-50 text-gray-600 px-3 py-1 rounded-lg text-sm hover:bg-gray-100 transition-colors">
                                            <i class="fas fa-cog mr-1"></i>Kelola
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Class Card 3 -->
                            <div class="class-card rounded-xl p-6 hover-lift">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                            <i class="fas fa-globe text-purple-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900">Pemrograman Web</h3>
                                            <p class="text-sm text-gray-600">IF-2022A</p>
                                        </div>
                                    </div>
                                    <span class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-xs font-medium">
                                        Aktif
                                    </span>
                                </div>

                                <div class="mb-4">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <div class="flex -space-x-2">
                                            <img class="student-avatar" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=32&h=32&fit=crop&crop=faces" alt="Student">
                                            <img class="student-avatar" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?w=32&h=32&fit=crop&crop=faces" alt="Student">
                                            <img class="student-avatar" src="https://images.unsplash.com/photo-1552058544-f2b08422138a?w=32&h=32&fit=crop&crop=faces" alt="Student">
                                            <div class="student-avatar bg-gray-300 flex items-center justify-center text-xs font-medium text-gray-600">+33</div>
                                        </div>
                                        <span class="text-sm text-gray-600">36 mahasiswa</span>
                                    </div>
                                    <div class="text-sm text-gray-600 mb-2">
                                        <i class="fas fa-calendar mr-2"></i>Jumat, 13:00-15:30
                                    </div>
                                    <div class="text-sm text-gray-600">
                                        <i class="fas fa-map-marker-alt mr-2"></i>Lab Web
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="text-sm">
                                        <span class="text-gray-600">Progress: </span>
                                        <span class="font-medium text-gray-900">82%</span>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="bg-purple-50 text-purple-600 px-3 py-1 rounded-lg text-sm hover:bg-purple-100 transition-colors">
                                            <i class="fas fa-eye mr-1"></i>Lihat
                                        </button>
                                        <button class="bg-gray-50 text-gray-600 px-3 py-1 rounded-lg text-sm hover:bg-gray-100 transition-colors">
                                            <i class="fas fa-cog mr-1"></i>Kelola
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Class Card 4 -->
                            <div class="class-card rounded-xl p-6 hover-lift">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center">
                                            <i class="fas fa-brain text-red-600"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-semibold text-gray-900">Kecerdasan Buatan</h3>
                                            <p class="text-sm text-gray-600">IF-2021A</p>
                                        </div>
                                    </div>
                                    <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded-full text-xs font-medium">
                                        Baru Mulai
                                    </span>
                                </div>

                                <div class="mb-4">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <div class="flex -space-x-2">
                                            <img class="student-avatar" src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?w=32&h=32&fit=crop&crop=faces" alt="Student">
                                            <img class="student-avatar" src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=32&h=32&fit=crop&crop=faces" alt="Student">
                                            <img class="student-avatar" src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=32&h=32&fit=crop&crop=faces" alt="Student">
                                            <div class="student-avatar bg-gray-300 flex items-center justify-center text-xs font-medium text-gray-600">+37</div>
                                        </div>
                                        <span class="text-sm text-gray-600">40 mahasiswa</span>
                                    </div>
                                    <div class="text-sm text-gray-600 mb-2">
                                        <i class="fas fa-calendar mr-2"></i>Sabtu, 08:00-11:30
                                    </div>
                                    <div class="text-sm text-gray-600">
                                        <i class="fas fa-map-marker-alt mr-2"></i>Lab AI
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="text-sm">
                                        <span class="text-gray-600">Progress: </span>
                                        <span class="font-medium text-gray-900">15%</span>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button class="bg-red-50 text-red-600 px-3 py-1 rounded-lg text-sm hover:bg-red-100 transition-colors">
                                            <i class="fas fa-eye mr-1"></i>Lihat
                                        </button>
                                        <button class="bg-gray-50 text-gray-600 px-3 py-1 rounded-lg text-sm hover:bg-gray-100 transition-colors">
                                            <i class="fas fa-cog mr-1"></i>Kelola
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Today's Schedule -->
                    <section id="schedule" class="activity-card p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-bold text-gray-900">Jadwal Mengajar Hari Ini</h2>
                            <div class="text-sm text-gray-500">
                                Selasa, 3 September 2025
                            </div>
                        </div>

                        <div class="space-y-4">
                            <!-- Schedule Item 1 -->
                            <div class="schedule-item p-4 rounded-lg">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                        <h3 class="font-semibold text-gray-900">Algoritma & Pemrograman</h3>
                                    </div>
                                    <span class="text-sm font-medium text-gray-600">08:00 - 09:40</span>
                                </div>
                                <div class="ml-6 text-sm text-gray-600 mb-3">
                                    <p><i class="fas fa-users mr-2"></i>38 mahasiswa (IF-2023A)</p>
                                    <p><i class="fas fa-map-marker-alt mr-2"></i>Lab Komputer 1</p>
                                </div>
                                <div class="ml-6 flex items-center space-x-2">
                                    <button class="bg-blue-600 text-white px-3 py-1 rounded-lg text-sm hover:bg-blue-700 transition-colors">
                                        <i class="fas fa-play mr-1"></i>Mulai Kelas
                                    </button>
                                    <button class="bg-gray-100 text-gray-600 px-3 py-1 rounded-lg text-sm hover:bg-gray-200 transition-colors">
                                        <i class="fas fa-users mr-1"></i>Absensi
                                    </button>
                                </div>
                            </div>

                            <!-- Schedule Item 2 -->
                            <div class="schedule-item p-4 rounded-lg">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                        <h3 class="font-semibold text-gray-900">Basis Data</h3>
                                    </div>
                                    <span class="text-sm font-medium text-gray-600">10:00 - 11:40</span>
                                </div>
                                <div class="ml-6 text-sm text-gray-600 mb-3">
                                    <p><i class="fas fa-users mr-2"></i>42 mahasiswa (IF-2023B)</p>
                                    <p><i class="fas fa-map-marker-alt mr-2"></i>Ruang A301</p>
                                </div>
                                <div class="ml-6 flex items-center space-x-2">
                                    <button class="bg-green-600 text-white px-3 py-1 rounded-lg text-sm hover:bg-green-700 transition-colors">
                                        <i class="fas fa-play mr-1"></i>Mulai Kelas
                                    </button>
                                    <button class="bg-gray-100 text-gray-600 px-3 py-1 rounded-lg text-sm hover:bg-gray-200 transition-colors">
                                        <i class="fas fa-users mr-1"></i>Absensi
                                    </button>
                                </div>
                            </div>

                            <!-- Schedule Item 3 -->
                            <div class="schedule-item p-4 rounded-lg">
                                <div class="flex items-center justify-between mb-2">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-3 h-3 bg-purple-500 rounded-full"></div>
                                        <h3 class="font-semibold text-gray-900">Konsultasi & Office Hours</h3>
                                    </div>
                                    <span class="text-sm font-medium text-gray-600">14:00 - 16:00</span>
                                </div>
                                <div class="ml-6 text-sm text-gray-600 mb-3">
                                    <p><i class="fas fa-door-open mr-2"></i>Konsultasi mahasiswa & bimbingan</p>
                                    <p><i class="fas fa-map-marker-alt mr-2"></i>Ruang Dosen A-205</p>
                                </div>
                                <div class="ml-6 flex items-center space-x-2">
                                    <button class="bg-purple-600 text-white px-3 py-1 rounded-lg text-sm hover:bg-purple-700 transition-colors">
                                        <i class="fas fa-calendar-check mr-1"></i>Lihat Jadwal
                                    </button>
                                    <button class="bg-gray-100 text-gray-600 px-3 py-1 rounded-lg text-sm hover:bg-gray-200 transition-colors">
                                        <i class="fas fa-plus mr-1"></i>Booking Slot
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Recent Activities -->
                    <section class="activity-card p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-bold text-gray-900">Aktivitas Terbaru</h2>
                            <button class="text-blue-600 hover:text-blue-700 font-medium text-sm">
                                Lihat Semua
                            </button>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start space-x-4 p-4 bg-blue-50 rounded-xl">
                                <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-upload text-blue-600"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-900">12 tugas baru dari Algoritma & Pemrograman</h3>
                                    <p class="text-sm text-gray-600">Tugas "Sorting & Searching" telah dikumpulkan mahasiswa</p>
                                    <p class="text-xs text-gray-500 mt-1">15 menit yang lalu</p>
                                </div>
                                <button class="bg-blue-600 text-white px-3 py-1 rounded-lg text-sm hover:bg-blue-700 transition-colors">
                                    Nilai
                                </button>
                            </div>

                            <div class="flex items-start space-x-4 p-4 bg-green-50 rounded-xl">
                                <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-question-circle text-green-600"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-900">Pertanyaan baru dari Sari Dewi</h3>
                                    <p class="text-sm text-gray-600">"Pak, bisa dijelaskan tentang normalisasi database?"</p>
                                    <p class="text-xs text-gray-500 mt-1">1 jam yang lalu</p>
                                </div>
                                <button class="bg-green-600 text-white px-3 py-1 rounded-lg text-sm hover:bg-green-700 transition-colors">
                                    Jawab
                                </button>
                            </div>

                            <div class="flex items-start space-x-4 p-4 bg-yellow-50 rounded-xl">
                                <div class="w-10 h-10 bg-yellow-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-exclamation-triangle text-yellow-600"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-900">Deadline tugas besok!</h3>
                                    <p class="text-sm text-gray-600">Tugas "Project Database" deadline besok - 8 mahasiswa belum mengumpulkan</p>
                                    <p class="text-xs text-gray-500 mt-1">2 jam yang lalu</p>
                                </div>
                                <button class="bg-yellow-600 text-white px-3 py-1 rounded-lg text-sm hover:bg-yellow-700 transition-colors">
                                    Reminder
                                </button>
                            </div>

                            <div class="flex items-start space-x-4 p-4 bg-purple-50 rounded-xl">
                                <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-star text-purple-600"></i>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-gray-900">Rating kelas meningkat!</h3>
                                    <p class="text-sm text-gray-600">Kelas "Pemrograman Web" mendapat rating 4.8/5 dari mahasiswa</p>
                                    <p class="text-xs text-gray-500 mt-1">1 hari yang lalu</p>
                                </div>
                                <button class="bg-purple-600 text-white px-3 py-1 rounded-lg text-sm hover:bg-purple-700 transition-colors">
                                    Lihat
                                </button>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Right Column - Grading & Analytics -->
                <div class="space-y-8">
                    <!-- Pending Grading -->
                    <section class="activity-card p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-bold text-gray-900">Penilaian Pending</h2>
                            <span class="bg-red-100 text-red-600 px-2 py-1 rounded-full text-xs font-medium">
                                12 Tugas
                            </span>
                        </div>

                        <div class="space-y-4">
                            <div class="border border-red-200 bg-red-50 rounded-xl p-4">
                                <div class="flex items-start justify-between mb-2">
                                    <h3 class="font-semibold text-red-900 text-sm">
                                        Algoritma & Pemrograman
                                    </h3>
                                    <span class="bg-red-200 text-red-800 px-2 py-1 rounded text-xs font-medium">
                                        Urgent
                                    </span>
                                </div>
                                <p class="text-sm text-red-700 mb-2">
                                    Tugas "Sorting & Searching" - 8 tugas belum dinilai
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-xs text-red-600">Deadline: Besok</div>
                                    <button class="bg-red-600 text-white px-3 py-1 rounded-lg text-xs hover:bg-red-700 transition-colors">
                                        Nilai Sekarang
                                    </button>
                                </div>
                            </div>

                            <div class="border border-yellow-200 bg-yellow-50 rounded-xl p-4">
                                <div class="flex items-start justify-between mb-2">
                                    <h3 class="font-semibold text-yellow-900 text-sm">
                                        Basis Data
                                    </h3>
                                    <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded text-xs font-medium">
                                        3 hari
                                    </span>
                                </div>
                                <p class="text-sm text-yellow-700 mb-2">
                                    Quiz "Normalisasi" - 4 quiz belum dinilai
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-xs text-yellow-600">Terkumpul hari ini</div>
                                    <button class="bg-yellow-600 text-white px-3 py-1 rounded-lg text-xs hover:bg-yellow-700 transition-colors">
                                        Lihat Quiz
                                    </button>
                                </div>
                            </div>

                            <div class="border border-blue-200 bg-blue-50 rounded-xl p-4">
                                <div class="flex items-start justify-between mb-2">
                                    <h3 class="font-semibold text-blue-900 text-sm">
                                        Pemrograman Web
                                    </h3>
                                    <span class="bg-blue-200 text-blue-800 px-2 py-1 rounded text-xs font-medium">
                                        1 minggu
                                    </span>
                                </div>
                                <p class="text-sm text-blue-700 mb-2">
                                    Project "Website Portfolio" - Review progress
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-xs text-blue-600">Mid-review</div>
                                    <button class="bg-blue-600 text-white px-3 py-1 rounded-lg text-xs hover:bg-blue-700 transition-colors">
                                        Review
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6">
                            <button class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg font-medium hover:bg-blue-700 transition-colors">
                                <i class="fas fa-clipboard-check mr-2"></i>Buka Grading Center
                            </button>
                        </div>
                    </section>

                    <!-- Class Analytics -->
                    <section class="activity-card p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-bold text-gray-900">Analisis Kelas</h2>
                            <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                                Detail
                            </button>
                        </div>

                        <div class="space-y-6">
                            <!-- Performance Overview -->
                            <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl p-4 text-white">
                                <div class="text-center">
                                    <h3 class="text-lg font-semibold mb-2">Rata-rata Nilai Kelas</h3>
                                    <div class="text-3xl font-bold mb-1">82.5</div>
                                    <div class="text-sm opacity-90">Semester ini | ↑ 5.2% dari semester lalu</div>
                                </div>
                            </div>

                            <!-- Subject Performance -->
                            <div class="space-y-4">
                                <div class="bg-gray-50 rounded-xl p-4">
                                    <div class="flex items-center justify-between mb-3">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                                <i class="fas fa-laptop-code text-blue-600"></i>
                                            </div>
                                            <div>
                                                <h3 class="font-semibold text-gray-900">Algoritma</h3>
                                                <p class="text-sm text-gray-600">38 mahasiswa</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-lg font-bold text-gray-900">85.2</div>
                                            <div class="text-sm text-green-600">↑ Excellent</div>
                                        </div>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="progress-bar h-2 rounded-full" style="width: 85%"></div>
                                    </div>
                                </div>

                                <div class="bg-gray-50 rounded-xl p-4">
                                    <div class="flex items-center justify-between mb-3">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                                <i class="fas fa-database text-green-600"></i>
                                            </div>
                                            <div>
                                                <h3 class="font-semibold text-gray-900">Basis Data</h3>
                                                <p class="text-sm text-gray-600">42 mahasiswa</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-lg font-bold text-gray-900">79.8</div>
                                            <div class="text-sm text-blue-600">→ Good</div>
                                        </div>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="progress-bar h-2 rounded-full" style="width: 80%"></div>
                                    </div>
                                </div>

                                <div class="bg-gray-50 rounded-xl p-4">
                                    <div class="flex items-center justify-between mb-3">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                                <i class="fas fa-globe text-purple-600"></i>
                                            </div>
                                            <div>
                                                <h3 class="font-semibold text-gray-900">Web Programming</h3>
                                                <p class="text-sm text-gray-600">36 mahasiswa</p>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-lg font-bold text-gray-900">87.1</div>
                                            <div class="text-sm text-green-600">↑ Excellent</div>
                                        </div>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="progress-bar h-2 rounded-full" style="width: 87%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Student Messages -->
                    <section class="activity-card p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-bold text-gray-900">Pesan Mahasiswa</h2>
                            <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded-full text-xs font-medium">
                                5 Baru
                            </span>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded">
                                <div class="flex items-start space-x-3">
                                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b812?w=32&h=32&fit=crop&crop=faces" 
                                         alt="Student" class="w-8 h-8 rounded-full">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-1">
                                            <h4 class="font-medium text-blue-900">Sari Dewi</h4>
                                            <span class="text-xs text-blue-600">Baru</span>
                                        </div>
                                        <p class="text-sm text-blue-800">
                                            "Pak Ahmad, saya kesulitan dengan tugas normalisasi database. Bisa minta waktu konsultasi?"
                                        </p>
                                        <div class="mt-2 flex space-x-2">
                                            <button class="text-xs bg-blue-600 text-white px-2 py-1 rounded hover:bg-blue-700">
                                                Balas
                                            </button>
                                            <button class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded hover:bg-gray-300">
                                                Jadwalkan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded">
                                <div class="flex items-start space-x-3">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=32&h=32&fit=crop&crop=faces" 
                                         alt="Student" class="w-8 h-8 rounded-full">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-1">
                                            <h4 class="font-medium text-green-900">Budi Santoso</h4>
                                            <span class="text-xs text-green-600">1 jam</span>
                                        </div>
                                        <p class="text-sm text-green-800">
                                            "Terima kasih atas feedback untuk project web saya. Sudah saya perbaiki sesuai saran."
                                        </p>
                                        <div class="mt-2">
                                            <button class="text-xs bg-green-600 text-white px-2 py-1 rounded hover:bg-green-700">
                                                Lihat Project
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded">
                                <div class="flex items-start space-x-3">
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=32&h=32&fit=crop&crop=faces" 
                                         alt="Student" class="w-8 h-8 rounded-full">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-1">
                                            <h4 class="font-medium text-yellow-900">Maya Indira</h4>
                                            <span class="text-xs text-yellow-600">2 jam</span>
                                        </div>
                                        <p class="text-sm text-yellow-800">
                                            "Pak, apakah ada referensi tambahan untuk machine learning? Saya ingin belajar lebih dalam."
                                        </p>
                                        <div class="mt-2">
                                            <button class="text-xs bg-yellow-600 text-white px-2 py-1 rounded hover:bg-yellow-700">
                                                Share Resource
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button class="w-full text-blue-600 hover:text-blue-700 text-sm font-medium py-2">
                                Lihat Semua Pesan
                            </button>
                        </div>
                    </section>

                    <!-- Quick Actions -->
                    <section class="activity-card p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">Aksi Cepat</h2>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <button class="bg-blue-50 hover:bg-blue-100 border border-blue-200 rounded-xl p-4 text-center transition-colors">
                                <i class="fas fa-plus-circle text-blue-600 text-xl mb-2 block"></i>
                                <span class="text-sm font-medium text-blue-700">Buat Tugas</span>
                            </button>
                            
                            <button class="bg-green-50 hover:bg-green-100 border border-green-200 rounded-xl p-4 text-center transition-colors">
                                <i class="fas fa-video text-green-600 text-xl mb-2 block"></i>
                                <span class="text-sm font-medium text-green-700">Live Class</span>
                            </button>
                            
                            <button class="bg-purple-50 hover:bg-purple-100 border border-purple-200 rounded-xl p-4 text-center transition-colors">
                                <i class="fas fa-clipboard-list text-purple-600 text-xl mb-2 block"></i>
                                <span class="text-sm font-medium text-purple-700">Buat Quiz</span>
                            </button>
                            
                            <button class="bg-orange-50 hover:bg-orange-100 border border-orange-200 rounded-xl p-4 text-center transition-colors">
                                <i class="fas fa-chart-bar text-orange-600 text-xl mb-2 block"></i>
                                <span class="text-sm font-medium text-orange-700">Laporan</span>
                            </button>
                            
                            <button class="bg-red-50 hover:bg-red-100 border border-red-200 rounded-xl p-4 text-center transition-colors">
                                <i class="fas fa-bell text-red-600 text-xl mb-2 block"></i>
                                <span class="text-sm font-medium text-red-700">Announcement</span>
                            </button>
                            
                            <button class="bg-gray-50 hover:bg-gray-100 border border-gray-200 rounded-xl p-4 text-center transition-colors">
                                <i class="fas fa-upload text-gray-600 text-xl mb-2 block"></i>
                                <span class="text-sm font-medium text-gray-700">Upload Materi</span>
                            </button>
                        </div>
                    </section>
                </div>
            </div>

            <!-- Weekly Teaching Schedule -->
            <section class="mt-12">
                <div class="activity-card p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-900">Jadwal Mengajar Minggu Ini</h2>
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
                                    <div class="text-lg font-bold text-gray-900">2</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-sm font-medium text-gray-500 mb-2">Selasa</div>
                                    <div class="text-lg font-bold bg-blue-600 text-white w-8 h-8 rounded-full mx-auto flex items-center justify-center">3</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-sm font-medium text-gray-500 mb-2">Rabu</div>
                                    <div class="text-lg font-bold text-gray-900">4</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-sm font-medium text-gray-500 mb-2">Kamis</div>
                                    <div class="text-lg font-bold text-gray-900">5</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-sm font-medium text-gray-500 mb-2">Jumat</div>
                                    <div class="text-lg font-bold text-gray-900">6</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-sm font-medium text-gray-500 mb-2">Sabtu</div>
                                    <div class="text-lg font-bold text-gray-900">7</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-sm font-medium text-gray-500 mb-2">Minggu</div>
                                    <div class="text-lg font-bold text-gray-900">8</div>
                                </div>
                            </div>

                            <!-- Schedule Events -->
                            <div class="grid grid-cols-7 gap-4">
                                <!-- Monday -->
                                <div class="space-y-2">
                                    <div class="bg-blue-100 border-l-4 border-blue-500 p-2 rounded text-xs">
                                        <div class="font-medium text-blue-800">Algoritma</div>
                                        <div class="text-blue-600">08:00-09:40</div>
                                        <div class="text-blue-500">Lab Komp 1</div>
                                    </div>
                                    <div class="bg-purple-100 border-l-4 border-purple-500 p-2 rounded text-xs">
                                        <div class="font-medium text-purple-800">Office Hours</div>
                                        <div class="text-purple-600">14:00-16:00</div>
                                        <div class="text-purple-500">Ruang A-205</div>
                                    </div>
                                </div>

                                <!-- Tuesday (Today) -->
                                <div class="space-y-2 bg-blue-50 p-2 rounded-lg border-2 border-blue-200">
                                    <div class="bg-blue-100 border-l-4 border-blue-500 p-2 rounded text-xs">
                                        <div class="font-medium text-blue-800">Algoritma</div>
                                        <div class="text-blue-600">08:00-09:40</div>
                                        <div class="text-blue-500">Lab Komp 1</div>
                                    </div>
                                    <div class="bg-green-100 border-l-4 border-green-500 p-2 rounded text-xs">
                                        <div class="font-medium text-green-800">Basis Data</div>
                                        <div class="text-green-600">10:00-11:40</div>
                                        <div class="text-green-500">Ruang A301</div>
                                    </div>
                                    <div class="bg-purple-100 border-l-4 border-purple-500 p-2 rounded text-xs">
                                        <div class="font-medium text-purple-800">Konsultasi</div>
                                        <div class="text-purple-600">14:00-16:00</div>
                                        <div class="text-purple-500">Ruang A-205</div>
                                    </div>
                                </div>

                                <!-- Wednesday -->
                                <div class="space-y-2">
                                    <div class="bg-blue-100 border-l-4 border-blue-500 p-2 rounded text-xs">
                                        <div class="font-medium text-blue-800">Algoritma</div>
                                        <div class="text-blue-600">08:00-09:40</div>
                                        <div class="text-blue-500">Lab Komp 1</div>
                                    </div>
                                    <div class="bg-orange-100 border-l-4 border-orange-500 p-2 rounded text-xs">
                                        <div class="font-medium text-orange-800">Rapat Dosen</div>
                                        <div class="text-orange-600">13:00-14:00</div>
                                        <div class="text-orange-500">Ruang Rapat</div>
                                    </div>
                                </div>

                                <!-- Thursday -->
                                <div class="space-y-2">
                                    <div class="bg-green-100 border-l-4 border-green-500 p-2 rounded text-xs">
                                        <div class="font-medium text-green-800">Basis Data</div>
                                        <div class="text-green-600">10:00-11:40</div>
                                        <div class="text-green-500">Ruang A301</div>
                                    </div>
                                    <div class="bg-purple-100 border-l-4 border-purple-500 p-2 rounded text-xs">
                                        <div class="font-medium text-purple-800">Bimbingan</div>
                                        <div class="text-purple-600">14:00-16:00</div>
                                        <div class="text-purple-500">Ruang A-205</div>
                                    </div>
                                </div>

                                <!-- Friday -->
                                <div class="space-y-2">
                                    <div class="bg-indigo-100 border-l-4 border-indigo-500 p-2 rounded text-xs">
                                        <div class="font-medium text-indigo-800">Web Programming</div>
                                        <div class="text-indigo-600">13:00-15:30</div>
                                        <div class="text-indigo-500">Lab Web</div>
                                    </div>
                                </div>

                                <!-- Saturday -->
                                <div class="space-y-2">
                                    <div class="bg-red-100 border-l-4 border-red-500 p-2 rounded text-xs">
                                        <div class="font-medium text-red-800">AI & ML</div>
                                        <div class="text-red-600">08:00-11:30</div>
                                        <div class="text-red-500">Lab AI</div>
                                    </div>
                                </div>

                                <!-- Sunday -->
                                <div class="space-y-2">
                                    <div class="bg-gray-100 border-l-4 border-gray-500 p-2 rounded text-xs">
                                        <div class="font-medium text-gray-800">Research Time</div>
                                        <div class="text-gray-600">Fleksibel</div>
                                        <div class="text-gray-500">Home/Lab</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Student Performance Analytics -->
            <section class="mt-8">
                <div class="activity-card p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-900">Performa Mahasiswa</h2>
                        <div class="flex space-x-2">
                            <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm">
                                <option>Semua Kelas</option>
                                <option>Algoritma & Pemrograman</option>
                                <option>Basis Data</option>
                                <option>Pemrograman Web</option>
                                <option>Kecerdasan Buatan</option>
                            </select>
                            <button class="border border-gray-300 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-50 transition-colors">
                                <i class="fas fa-download mr-2"></i>Export
                            </button>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Top Performers -->
                        <div class="bg-green-50 rounded-xl p-6 border border-green-200">
                            <h3 class="text-lg font-bold text-green-900 mb-4">
                                <i class="fas fa-trophy mr-2 text-yellow-500"></i>Top Performers
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between bg-white p-3 rounded-lg">
                                    <div class="flex items-center space-x-3">
                                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b812?w=32&h=32&fit=crop&crop=faces" 
                                             alt="Student" class="w-8 h-8 rounded-full">
                                        <div>
                                            <div class="font-medium text-gray-900">Sari Dewi</div>
                                            <div class="text-xs text-gray-500">IF-2023A</div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="font-bold text-green-600">95.2</div>
                                        <div class="text-xs text-gray-500">Avg</div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between bg-white p-3 rounded-lg">
                                    <div class="flex items-center space-x-3">
                                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=32&h=32&fit=crop&crop=faces" 
                                             alt="Student" class="w-8 h-8 rounded-full">
                                        <div>
                                            <div class="font-medium text-gray-900">Ahmad Rizki</div>
                                            <div class="text-xs text-gray-500">IF-2023B</div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="font-bold text-green-600">92.8</div>
                                        <div class="text-xs text-gray-500">Avg</div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between bg-white p-3 rounded-lg">
                                    <div class="flex items-center space-x-3">
                                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=32&h=32&fit=crop&crop=faces" 
                                             alt="Student" class="w-8 h-8 rounded-full">
                                        <div>
                                            <div class="font-medium text-gray-900">Maya Indira</div>
                                            <div class="text-xs text-gray-500">IF-2022A</div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="font-bold text-green-600">91.5</div>
                                        <div class="text-xs text-gray-500">Avg</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Need Attention -->
                        <div class="bg-yellow-50 rounded-xl p-6 border border-yellow-200">
                            <h3 class="text-lg font-bold text-yellow-900 mb-4">
                                <i class="fas fa-exclamation-triangle mr-2 text-yellow-500"></i>Perlu Perhatian
                            </h3>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between bg-white p-3 rounded-lg">
                                    <div class="flex items-center space-x-3">
                                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=32&h=32&fit=crop&crop=faces" 
                                             alt="Student" class="w-8 h-8 rounded-full">
                                        <div>
                                            <div class="font-medium text-gray-900">Budi Santoso</div>
                                            <div class="text-xs text-gray-500">IF-2023A</div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="font-bold text-yellow-600">65.2</div>
                                        <div class="text-xs text-gray-500">Avg</div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between bg-white p-3 rounded-lg">
                                    <div class="flex items-center space-x-3">
                                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=32&h=32&fit=crop&crop=faces" 
                                             alt="Student" class="w-8 h-8 rounded-full">
                                        <div>
                                            <div class="font-medium text-gray-900">Rina Maharani</div>
                                            <div class="text-xs text-gray-500">IF-2023B</div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="font-bold text-yellow-600">68.9</div>
                                        <div class="text-xs text-gray-500">Avg</div>
                                    </div>
                                </div>
                                <button class="w-full mt-2 bg-yellow-600 text-white py-2 rounded-lg text-sm font-medium hover:bg-yellow-700 transition-colors">
                                    <i class="fas fa-user-friends mr-2"></i>Schedule Mentoring
                                </button>
                            </div>
                        </div>

                        <!-- Class Statistics -->
                        <div class="bg-blue-50 rounded-xl p-6 border border-blue-200">
                            <h3 class="text-lg font-bold text-blue-900 mb-4">
                                <i class="fas fa-chart-bar mr-2 text-blue-500"></i>Statistik Kelas
                            </h3>
                            <div class="space-y-4">
                                <div class="bg-white p-3 rounded-lg">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm text-gray-600">Kehadiran Rata-rata</span>
                                        <span class="font-bold text-blue-600">92%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-blue-600 h-2 rounded-full" style="width: 92%"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-3 rounded-lg">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm text-gray-600">Tugas Terkumpul</span>
                                        <span class="font-bold text-green-600">87%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-green-600 h-2 rounded-full" style="width: 87%"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-3 rounded-lg">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm text-gray-600">Partisipasi</span>
                                        <span class="font-bold text-purple-600">78%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-purple-600 h-2 rounded-full" style="width: 78%"></div>
                                    </div>
                                </div>
                                <div class="text-center text-xs text-gray-500 mt-4">
                                    Data semester ini
                                </div>
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
            if (mobileMenu) {
                mobileMenu.classList.toggle('hidden');
            }
        }

        // Real-time notifications
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
                    <i class="fas fa-bell mr-2"></i>
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
            }, 5000);
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

        // Animation on scroll
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
        document.querySelectorAll('.hover-lift, .activity-card, .class-card').forEach(el => {
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

        // Demo lecturer notifications
        setTimeout(() => {
            showNotification('Selamat datang kembali, Dr. Ahmad! 👨‍🏫', 'success');
        }, 2000);

        setTimeout(() => {
            showNotification('Anda memiliki 12 tugas baru yang perlu dinilai', 'warning');
        }, 5000);

        setTimeout(() => {
            showNotification('Sari Dewi mengirim pertanyaan baru', 'info');
        }, 8000);

        // Auto-refresh pending tasks counter
        function updatePendingTasks() {
            // Simulate real-time updates
            const counters = document.querySelectorAll('[data-pending-count]');
            counters.forEach(counter => {
                const currentCount = parseInt(counter.textContent);
                if (Math.random() < 0.1) { // 10% chance to update
                    const change = Math.random() < 0.7 ? -1 : 1; // 70% chance to decrease
                    const newCount = Math.max(0, currentCount + change);
                    counter.textContent = newCount;
                    
                    if (change < 0) {
                        showNotification('Tugas berhasil dinilai! 📝', 'success');
                    }
                }
            });
        }

        // Update every 30 seconds
        setInterval(updatePendingTasks, 30000);

        // Quick action handlers
        document.addEventListener('click', function(e) {
            if (e.target.closest('.quick-action')) {
                const action = e.target.closest('.quick-action').dataset.action;
                handleQuickAction(action);
            }
        });

        function handleQuickAction(action) {
            switch(action) {
                case 'create-task':
                    showNotification('Membuka form pembuatan tugas...', 'info');
                    break;
                case 'live-class':
                    showNotification('Memulai live streaming...', 'success');
                    break;
                case 'create-quiz':
                    showNotification('Membuka quiz builder...', 'info');
                    break;
                case 'announcement':
                    showNotification('Membuat pengumuman baru...', 'info');
                    break;
                case 'upload-material':
                    showNotification('Membuka upload manager...', 'info');
                    break;
                default:
                    showNotification('Fitur akan segera tersedia!', 'warning');
            }
        }

        // Grade assignment simulation
        function gradeAssignment(assignmentId) {
            showNotification('Menyimpan nilai...', 'info');
            setTimeout(() => {
                showNotification('Nilai berhasil disimpan! ✅', 'success');
                // Update pending counter
                const pendingElement = document.querySelector('[data-assignment="' + assignmentId + '"]');
                if (pendingElement) {
                    pendingElement.remove();
                }
            }, 2000);
        }

        // Schedule consultation
        function scheduleConsultation(studentName) {
            showNotification(`Menjadwalkan konsultasi dengan ${studentName}...`, 'info');
            setTimeout(() => {
                showNotification(`Konsultasi dengan ${studentName} berhasil dijadwalkan!`, 'success');
            }, 1500);
        }

        // Reply to student message
        function replyToMessage(studentId) {
            showNotification('Membuka chat window...', 'info');
            // In real implementation, this would open a chat interface
        }

        // Start live class
        function startLiveClass(className) {
            showNotification(`Memulai live class ${className}...`, 'info');
            setTimeout(() => {
                showNotification(`Live class ${className} dimulai! 🎥`, 'success');
            }, 2000);
        }

        // Take attendance
        function takeAttendance(classId) {
            showNotification('Membuka sistem absensi...', 'info');
            setTimeout(() => {
                showNotification('Absensi berhasil dibuka untuk mahasiswa', 'success');
            }, 1500);
        }

        // Progressive Web App features
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/lecturer-sw.js')
                    .then(registration => {
                        console.log('Lecturer SW registered: ', registration);
                    })
                    .catch(registrationError => {
                        console.log('Lecturer SW registration failed: ', registrationError);
                    });
            });
        }

        // Dark mode toggle (optional feature)
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            const isDarkMode = document.body.classList.contains('dark-mode');
            localStorage.setItem('lecturerDarkMode', isDarkMode);
            showNotification(`Mode ${isDarkMode ? 'gelap' : 'terang'} diaktifkan`, 'info');
        }

        // Load saved dark mode preference
        if (localStorage.getItem('lecturerDarkMode') === 'true') {
            document.body.classList.add('dark-mode');
        }

        // Auto-save drafts for assignments/announcements
        let autoSaveTimer;
        function autoSave(content, type) {
            clearTimeout(autoSaveTimer);
            autoSaveTimer = setTimeout(() => {
                localStorage.setItem(`draft-${type}`, content);
                showNotification('Draft otomatis tersimpan', 'info');
            }, 5000);
        }

        // Keyboard shortcuts for lecturers
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey || e.metaKey) {
                switch(e.key) {
                    case 'n':
                        e.preventDefault();
                        showNotification('Shortcut: Ctrl+N untuk tugas baru', 'info');
                        break;
                    case 'g':
                        e.preventDefault();
                        showNotification('Shortcut: Ctrl+G untuk grading center', 'info');
                        break;
                    case 'l':
                        e.preventDefault();
                        showNotification('Shortcut: Ctrl+L untuk live class', 'info');
                        break;
                    case 'm':
                        e.preventDefault();
                        showNotification('Shortcut: Ctrl+M untuk pesan', 'info');
                        break;
                }
            }
        });

        // Initialize tooltips for better UX
        function initializeTooltips() {
            const tooltipElements = document.querySelectorAll('[data-tooltip]');
            tooltipElements.forEach(element => {
                element.addEventListener('mouseenter', function() {
                    const tooltip = document.createElement('div');
                    tooltip.className = 'absolute z-50 px-2 py-1 text-sm text-white bg-black rounded shadow-lg';
                    tooltip.textContent = this.dataset.tooltip;
                    tooltip.style.top = this.offsetTop - 30 + 'px';
                    tooltip.style.left = this.offsetLeft + 'px';
                    tooltip.id = 'tooltip-' + Date.now();
                    document.body.appendChild(tooltip);
                    
                    this.addEventListener('mouseleave', function() {
                        const tooltipEl = document.getElementById(tooltip.id);
                        if (tooltipEl) {
                            tooltipEl.remove();
                        }
                    }, { once: true });
                });
            });
        }

        // Initialize tooltips on page load
        initializeTooltips();

        // Performance monitoring for lecturer actions
        function trackAction(action, duration = null) {
            const timestamp = new Date().toISOString();
            const actionData = {
                action: action,
                timestamp: timestamp,
                duration: duration,
                user: 'Dr. Ahmad Sutrisno'
            };
            
            // In real implementation, this would send to analytics
            console.log('Lecturer Action Tracked:', actionData);
        }

        // Track page load time
        window.addEventListener('load', function() {
            const loadTime = performance.now();
            trackAction('page_load', Math.round(loadTime));
        });

        // Handle offline/online status for better UX
        window.addEventListener('online', function() {
            showNotification('Koneksi internet tersedia kembali', 'success');
        });

        window.addEventListener('offline', function() {
            showNotification('Tidak ada koneksi internet. Mode offline diaktifkan.', 'warning');
        });

        // Initialize lecturer dashboard
        document.addEventListener('DOMContentLoaded', function() {
            // Set current time
            updateClock();
            
            // Initialize real-time updates
            setInterval(function() {
                // Simulate real-time data updates
                if (Math.random() < 0.3) { // 30% chance every 10 seconds
                    const updates = [
                        'Mahasiswa baru bergabung ke kelas',
                        'Tugas baru dikumpulkan',
                        'Pertanyaan baru di forum diskusi',
                        'Reminder: Kelas dimulai dalam 30 menit'
                    ];
                    const randomUpdate = updates[Math.floor(Math.random() * updates.length)];
                    showNotification(randomUpdate, 'info');
                }
            }, 10000);
            
            console.log('🎓 EduSphere Lecturer Dashboard initialized successfully');
            console.log('👨‍🏫 Welcome Dr. Ahmad Sutrisno!');
        });

        // Export functions for global access
        window.lecturerDashboard = {
            gradeAssignment,
            scheduleConsultation,
            replyToMessage,
            startLiveClass,
            takeAttendance,
            showNotification,
            trackAction
        };
    </script>
</body>
</html>