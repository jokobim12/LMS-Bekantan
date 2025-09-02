<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style> 
        .logo-circle {
            background: linear-gradient(135deg, #e5e7eb 0%, #d1d5db 100%);
        }
        
        .nav-item {
            transition: all 0.2s ease;
        }
        
        .nav-item:hover {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
        }
        
        .profile-avatar {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        }
        
        /* Custom styles for schedule */
        .schedule-container {
            overflow-x: auto;
            padding-bottom: 16px;
        }
        
        .schedule-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(300px, 1fr));
            gap: 16px;
        }
        
        .schedule-card {
            min-width: 300px;
            transition: all 0.3s ease;
        }
        
        @media (max-width: 1024px) {
            .schedule-grid {
                grid-template-columns: repeat(2, minmax(280px, 1fr));
            }
        }
        
        @media (max-width: 768px) {
            .schedule-grid {
                grid-template-columns: 1fr;
            }
            
            .schedule-card {
                min-width: auto;
            }
        }
        
        /* New schedule styles */
        .new-schedule-container {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            width: 100%;
        }
        
        .new-schedule-header {
            padding: 25px 30px 15px;
            background: rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .new-schedule-content {
            padding: 30px;
        }
        
        .new-schedule-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        @media (min-width: 768px) {
            .new-schedule-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (min-width: 1024px) {
            .new-schedule-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        
        .new-schedule-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .new-schedule-card:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .icon-container {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .math-icon {
            background: rgba(66, 153, 225, 0.3);
        }
        
        .english-icon {
            background: rgba(72, 187, 120, 0.3);
        }
        
        .physics-icon {
            background: rgba(159, 122, 234, 0.3);
        }
        
        .card-header h3 {
            font-size: 1.4rem;
            color: white;
            font-weight: 600;
        }
        
        .card-details {
            margin-bottom: 15px;
        }
        
        .card-details p {
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 5px;
            font-size: 0.95rem;
        }
        
        .time-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 5px 10px;
            border-radius: 8px;
            color: white;
            font-size: 0.85rem;
            font-weight: 500;
            margin-right: 10px;
        }
        
        .duration {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.85rem;
        }
        
        .card-footer {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
        
        .status-badge {
            padding: 5px 12px;
            border-radius: 8px;
            color: white;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .progress-bar {
            width: 100%;
            height: 8px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            border-radius: 4px;
        }
        
        .ongoing {
            background: rgba(66, 153, 225, 0.4);
        }
        
        .upcoming {
            background: rgba(246, 173, 85, 0.4);
        }
        
        .afternoon {
            background: rgba(159, 122, 234, 0.4);
        }
        
        .schedule-summary {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 20px;
            margin-top: 25px;
            display: flex;
            justify-content: space-around;
            text-align: center;
        }
        
        .summary-item {
            padding: 0 15px;
        }
        
        .summary-value {
            font-size: 2.2rem;
            font-weight: 700;
            color: white;
            margin-bottom: 5px;
        }
        
        .summary-label {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header Navigation -->
    <header class="bg-gradient-to-r from-blue-400 to-blue-500 shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Left Section: Logo and Navigation -->
                <div class="flex items-center space-x-8">
                    <!-- Logo -->
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-full overflow-hidden">
                            <img src="https://img.pikbest.com/png-images/20240729/elegant-lion-head-logo-on-white-background_10687962.png!w700wp" alt="Logo" class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <!-- Navigation Menu -->
                    <nav class="hidden md:flex items-center space-x-6">
                        <a href="#" class="nav-item text-white font-medium px-3 py-2 rounded-md hover:bg-white hover:bg-opacity-10 transition-all">
                            Beranda
                        </a>
                        <a href="#" class="nav-item text-white font-medium px-3 py-2 rounded-md hover:bg-white hover:bg-opacity-10 transition-all">
                            Kelas Akademik
                        </a>
                        <a href="#" class="nav-item text-white font-medium px-3 py-2 rounded-md hover:bg-white hover:bg-opacity-10 transition-all">
                            Jadwal
                        </a>
                        <a href="#" class="nav-item text-white font-medium px-3 py-2 rounded-md hover:bg-white hover:bg-opacity-10 transition-all">
                            Obrolan
                        </a>
                    </nav>
                </div>
                
                <!-- Right Section: Notifications and Profile -->
                <div class="flex items-center space-x-4">
                    <!-- Notification Bell -->
                    <button class="text-white hover:text-gray-200 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5-5 5-5h-5m-6 10v-2a4 4 0 00-8 0v2m8 0H5m8 0v5"></path>
                        </svg>
                    </button>
                    
                    <!-- Language Selector -->
                    <div class="flex items-center space-x-1 text-white">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm font-medium">ID</span>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    
                    <!-- Profile Section -->
                    <div class="flex items-center space-x-2 cursor-pointer hover:bg-white hover:bg-opacity-10 rounded-lg px-2 py-1 transition-all">
                        <div class="w-8 h-8 rounded-full profile-avatar flex items-center justify-center">
                            <span class="text-white text-sm font-bold">C</span>
                        </div>
                        <span class="text-white font-medium">Chaya</span>
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button class="text-white hover:text-gray-200 focus:outline-none focus:text-gray-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Main Content Area -->
    <main class="container mx-auto px-4 py-8">
        <!-- Welcome Section -->
        <div class="mb-8">
            <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-2xl p-8 text-white relative overflow-hidden">
                <div class="relative z-10">
                    <h1 class="text-3xl font-bold mb-2">Selamat Datang, Chaya! 👋</h1>
                    <p class="text-purple-100 text-lg">Mari mulai pembelajaran yang produktif hari ini</p>
                </div>
                <div class="absolute top-0 right-0 w-64 h-64 bg-white bg-opacity-10 rounded-full -mr-32 -mt-32"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-white bg-opacity-5 rounded-full -ml-24 -mb-24"></div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-2xl font-bold text-gray-900">12</p>
                        <p class="text-gray-500 text-sm">Kelas Aktif</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-2xl font-bold text-gray-900">28</p>
                        <p class="text-gray-500 text-sm">Tugas Selesai</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-2xl font-bold text-gray-900">5</p>
                        <p class="text-gray-500 text-sm">Jadwal Hari Ini</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-2xl font-bold text-gray-900">15</p>
                        <p class="text-gray-500 text-sm">Pesan Baru</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Recent Activities -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold text-gray-900">Aktivitas Terbaru</h3>
                        <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Lihat Semua</button>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4 p-4 hover:bg-gray-50 rounded-lg transition-colors">
                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-900 font-medium">Tugas Matematika telah dikumpulkan</p>
                                <p class="text-gray-500 text-sm">2 jam yang lalu</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4 p-4 hover:bg-gray-50 rounded-lg transition-colors">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-900 font-medium">Kelas Bahasa Inggris selesai</p>
                                <p class="text-gray-500 text-sm">4 jam yang lalu</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4 p-4 hover:bg-gray-50 rounded-lg transition-colors">
                            <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-gray-900 font-medium">Pesan baru dari guru Fisika</p>
                                <p class="text-gray-500 text-sm">1 hari yang lalu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Academic News & Enhanced Schedule -->
            <div class="space-y-6">
                <!-- Berita Akademik -->
                <div class="bg-white rounded-xl shadow p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="font-semibold text-lg">Berita Akademik</h2>
                        <span class="text-sm bg-red-100 text-red-600 px-2 py-0.5 rounded-full">7 Baru</span>
                    </div>

                    <!-- Scrollable content -->
                    <div class="space-y-4 max-h-64 overflow-y-auto pr-2">
                        <div class="border-l-4 border-red-500 pl-3">
                            <h3 class="font-semibold">Pengumuman UTS Semester Ganjil</h3>
                            <p class="text-xs text-gray-500">Ujian Tengah Semester akan dimulai pada tanggal 15 Oktober 2024</p>
                            <span class="text-xs bg-red-100 text-red-600 px-2 py-0.5 rounded">Penting</span>
                        </div>

                        <div class="border-l-4 border-blue-500 pl-3">
                            <h3 class="font-semibold">Workshop Coding Bootcamp</h3>
                            <p class="text-xs text-gray-500">Daftar sekarang untuk workshop programming gratis</p>
                            <span class="text-xs bg-blue-100 text-blue-600 px-2 py-0.5 rounded">Event</span>
                        </div>

                        <div class="border-l-4 border-green-500 pl-3">
                            <h3 class="font-semibold">Beasiswa Prestasi Akademik</h3>
                            <p class="text-xs text-gray-500">Pendaftaran beasiswa dibuka hingga akhir bulan</p>
                            <span class="text-xs bg-green-100 text-green-600 px-2 py-0.5 rounded">Beasiswa</span>
                        </div>

                        <div class="border-l-4 border-yellow-500 pl-3">
                            <h3 class="font-semibold">Lomba Sains Nasional</h3>
                            <p class="text-xs text-gray-500">Pendaftaran lomba sains tingkat nasional dibuka</p>
                            <span class="text-xs bg-yellow-100 text-yellow-600 px-2 py-0.5 rounded">Lomba</span>
                        </div>

                        <div class="border-l-4 border-indigo-500 pl-3">
                            <h3 class="font-semibold">Seminar AI & Data Science</h3>
                            <p class="text-xs text-gray-500">Seminar gratis untuk semua mahasiswa</p>
                            <span class="text-xs bg-indigo-100 text-indigo-600 px-2 py-0.5 rounded">Seminar</span>
                        </div>

                        <div class="border-l-4 border-pink-500 pl-3">
                            <h3 class="font-semibold">Pengumuman Libur Nasional</h3>
                            <p class="text-xs text-gray-500">Libur nasional pada 1 November 2024</p>
                            <span class="text-xs bg-pink-100 text-pink-600 px-2 py-0.5 rounded">Info</span>
                        </div>

                        <div class="border-l-4 border-gray-500 pl-3">
                            <h3 class="font-semibold">Info Kegiatan Kampus</h3>
                            <p class="text-xs text-gray-500">Kegiatan sosial kampus minggu depan</p>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5 rounded">Umum</span>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Today's Schedule - UPDATED VERSION -->
                <div class="new-schedule-container">
                    <div class="new-schedule-header">
                        <h3 class="text-xl font-bold text-white">Jadwal Hari Ini</h3>
                        <div class="bg-white bg-opacity-20 rounded-lg px-3 py-1">
                            <span class="text-sm font-medium text-white">Sen, 1 Sep</span>
                        </div>
                    </div>
                    
                    <div class="new-schedule-content">
                        <div class="new-schedule-grid">
                            <!-- Matematika -->
                            <div class="new-schedule-card">
                                <div class="card-header">
                                    <div class="icon-container math-icon">
                                        <i class="fas fa-calculator fa-lg" style="color: #4299e1;"></i>
                                    </div>
                                    <h3>Matematika</h3>
                                </div>
                                
                                <div class="card-details">
                                    <p><i class="fas fa-map-marker-alt"></i> Ruang A1 - Pak Budi</p>
                                    <div class="mt-2">
                                        <span class="time-badge"><i class="far fa-clock"></i> 09:00 - 11:00</span>
                                        <span class="duration">2 Jam</span>
                                    </div>
                                </div>
                                
                                <div class="card-footer">
                                    <div class="status-badge ongoing">Sedang Berlangsung</div>
                                    <div class="progress-bar">
                                        <div class="progress-fill ongoing" style="width: 30%"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Bahasa Inggris -->
                            <div class="new-schedule-card">
                                <div class="card-header">
                                    <div class="icon-container english-icon">
                                        <i class="fas fa-language fa-lg" style="color: #48bb78;"></i>
                                    </div>
                                    <h3>Bahasa Inggris</h3>
                                </div>
                                
                                <div class="card-details">
                                    <p><i class="fas fa-map-marker-alt"></i> Ruang B2 - Mashrafi</p>
                                    <div class="mt-2">
                                        <span class="time-badge"><i class="far fa-clock"></i> 11:00 - 12:30</span>
                                        <span class="duration">1.5 Jam</span>
                                    </div>
                                </div>
                                
                                <div class="card-footer">
                                    <div class="status-badge upcoming">Akan Datang</div>
                                    <div class="progress-bar">
                                        <div class="progress-fill upcoming" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Fisika -->
                            <div class="new-schedule-card">
                                <div class="card-header">
                                    <div class="icon-container physics-icon">
                                        <i class="fas fa-atom fa-lg" style="color: #9f7aea;"></i>
                                    </div>
                                    <h3>Fisika</h3>
                                </div>
                                
                                <div class="card-details">
                                    <p><i class="fas fa-map-marker-alt"></i> Lab Sains - Pak Ahmad</p>
                                    <div class="mt-2">
                                        <span class="time-badge"><i class="far fa-clock"></i> 14:00 - 16:00</span>
                                        <span class="duration">2 Jam</span>
                                    </div>
                                </div>
                                
                                <div class="card-footer">
                                    <div class="status-badge afternoon">Nanti Siang</div>
                                    <div class="progress-bar">
                                        <div class="progress-fill afternoon" style="width: 0%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="schedule-summary">
                            <div class="summary-item">
                                <div class="summary-value">3</div>
                                <div class="summary-label">Kelas Hari Ini</div>
                            </div>
                            <div class="summary-item">
                                <div class="summary-value">5.5</div>
                                <div class="summary-label">Jam Belajar</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Mobile Navigation Menu (Hidden by default) -->
    <div id="mobile-menu" class="md:hidden hidden bg-blue-500 shadow-lg">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="block px-3 py-2 text-white font-medium rounded-md hover:bg-white hover:bg-opacity-10">Beranda</a>
            <a href="#" class="block px-3 py-2 text-white font-medium rounded-md hover:bg-white hover:bg-opacity-10">Kelas</a>
            <a href="#" class="block px-3 py-2 text-white font-medium rounded-md hover:bg-white hover:bg-opacity-10">Penjadwalan</a>
            <a href="#" class="block px-3 py-2 text-white font-medium rounded-md hover:bg-white hover:bg-opacity-10">Obrolan</a>
        </div>
    </div>

    <script>
        // Simple mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.md\\:hidden button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
            
            // Update progress bars based on current time
            function updateProgressBars() {
                const now = new Date();
                const hours = now.getHours();
                const minutes = now.getMinutes();
                const currentTime = hours + minutes / 60;
                
                const classes = [
                    { start: 9, end: 11, element: document.querySelectorAll('.progress-fill')[0] },
                    { start: 11, end: 12.5, element: document.querySelectorAll('.progress-fill')[1] },
                    { start: 14, end: 16, element: document.querySelectorAll('.progress-fill')[2] }
                ];
                
                classes.forEach(cls => {
                    if (currentTime >= cls.start && currentTime < cls.end) {
                        const progress = ((currentTime - cls.start) / (cls.end - cls.start)) * 100;
                        cls.element.style.width = `${progress}%`;
                    }
                });
            }
            
            updateProgressBars();
            setInterval(updateProgressBars, 60000); // Update every minute
        });
    </script>
</body>
</html>