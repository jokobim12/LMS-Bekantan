<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                            Kelas
                        </a>
                        <a href="#" class="nav-item text-white font-medium px-3 py-2 rounded-md hover:bg-white hover:bg-opacity-10 transition-all">
                            Penjadwalan
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
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
                        <p class="text-2xl font-bold text-gray-900">10</p>
                        <p class="text-gray-500 text-sm">Tugas Belum Dikumpul</p>
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
                <!-- Academic News -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold text-gray-900">Berita Akademik</h3>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                            3 Baru
                        </span>
                    </div>
                    <div class="space-y-4">
                        <div class="border-l-4 border-red-400 pl-4 hover:bg-gray-50 p-3 rounded-r-lg transition-colors">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <h4 class="font-medium text-gray-900 text-sm mb-1">Pengumuman UTS Semester Ganjil</h4>
                                    <p class="text-xs text-gray-600 mb-2">Ujian Tengah Semester akan dimulai pada tanggal 15 Oktober 2024</p>
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">
                                        Penting
                                    </span>
                                </div>
                                <span class="text-xs text-gray-400">2h</span>
                            </div>
                        </div>

                        <div class="border-l-4 border-blue-400 pl-4 hover:bg-gray-50 p-3 rounded-r-lg transition-colors">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <h4 class="font-medium text-gray-900 text-sm mb-1">Workshop Coding Bootcamp</h4>
                                    <p class="text-xs text-gray-600 mb-2">Daftar sekarang untuk workshop programming gratis</p>
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700">
                                        Event
                                    </span>
                                </div>
                                <span class="text-xs text-gray-400">1d</span>
                            </div>
                        </div>

                        <div class="border-l-4 border-green-400 pl-4 hover:bg-gray-50 p-3 rounded-r-lg transition-colors">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <h4 class="font-medium text-gray-900 text-sm mb-1">Beasiswa Prestasi Akademik</h4>
                                    <p class="text-xs text-gray-600 mb-2">Pendaftaran beasiswa dibuka hingga akhir bulan</p>
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                        Beasiswa
                                    </span>
                                </div>
                                <span class="text-xs text-gray-400">2d</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Today's Schedule -->
                <div class="bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl shadow-lg p-6 text-white">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold">Jadwal Hari Ini</h3>
                        <div class="bg-white bg-opacity-20 rounded-lg px-3 py-1">
                            <span class="text-sm font-medium">Sen, 1 Sep</span>
                        </div>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="bg-white bg-opacity-15 backdrop-blur-sm rounded-xl p-4 border border-white border-opacity-20 hover:bg-opacity-25 transition-all">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center space-x-3">
                                    <div class="w-12 h-12 bg-blue-400 bg-opacity-30 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-lg">Matematika</h4>
                                        <p class="text-indigo-100 text-sm">Ruang A1 • Pak Budi</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="text-xl font-bold">09:00</div>
                                    <div class="text-indigo-200 text-sm">2 jam</div>
                                </div>
                            </div>
                            <div class="w-full bg-white bg-opacity-20 rounded-full h-1.5">
                                <div class="bg-blue-300 h-1.5 rounded-full" style="width: 30%"></div>
                            </div>
                        </div>

                        <div class="bg-white bg-opacity-15 backdrop-blur-sm rounded-xl p-4 border border-white border-opacity-20 hover:bg-opacity-25 transition-all">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center space-x-3">
                                    <div class="w-12 h-12 bg-green-400 bg-opacity-30 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-lg">Bahasa Inggris</h4>
                                        <p class="text-indigo-100 text-sm">Ruang B2 • Ms. Sarah</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="text-xl font-bold">11:00</div>
                                    <div class="text-indigo-200 text-sm">1.5 jam</div>
                                </div>
                            </div>
                            <div class="w-full bg-white bg-opacity-20 rounded-full h-1.5">
                                <div class="bg-green-300 h-1.5 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>

                        <div class="bg-white bg-opacity-15 backdrop-blur-sm rounded-xl p-4 border border-white border-opacity-20 hover:bg-opacity-25 transition-all">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center space-x-3">
                                    <div class="w-12 h-12 bg-purple-400 bg-opacity-30 rounded-lg flex items-center justify-center">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-lg">Fisika</h4>
                                        <p class="text-indigo-100 text-sm">Lab Sains • Pak Ahmad</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="text-xl font-bold">14:00</div>
                                    <div class="text-indigo-200 text-sm">2 jam</div>
                                </div>
                            </div>
                            <div class="w-full bg-white bg-opacity-20 rounded-full h-1.5">
                                <div class="bg-purple-300 h-1.5 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule Summary -->
                    <div class="mt-6 bg-white bg-opacity-10 rounded-lg p-4">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-indigo-100">Total Kelas Hari Ini</span>
                            <span class="font-semibold">3 Kelas</span>
                        </div>
                        <div class="flex items-center justify-between text-sm mt-2">
                            <span class="text-indigo-100">Waktu Belajar</span>
                            <span class="font-semibold">5.5 Jam</span>
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
        });
    </script>
</body>
</html>