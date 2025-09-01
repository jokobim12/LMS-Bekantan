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
                        <div class="w-10 h-10 rounded-full logo-circle flex items-center justify-center">
                            <span class="text-gray-600 font-bold text-sm">LOGO</span>
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

            <!-- Quick Actions & Schedule -->
            <div class="space-y-6">
                <!-- Quick Actions -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Aksi Cepat</h3>
                    <div class="space-y-3">
                        <button class="w-full flex items-center space-x-3 p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors">
                            <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Buat Tugas Baru</span>
                        </button>

                        <button class="w-full flex items-center space-x-3 p-3 bg-green-50 hover:bg-green-100 rounded-lg transition-colors">
                            <div class="w-8 h-8 bg-green-600 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V7a2 2 0 012-2h2a2 2 0 012 2v0M8 7v8a2 2 0 002 2h4a2 2 0 002-2V7M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h1m5-6h4"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Jadwalkan Kelas</span>
                        </button>

                        <button class="w-full flex items-center space-x-3 p-3 bg-purple-50 hover:bg-purple-100 rounded-lg transition-colors">
                            <div class="w-8 h-8 bg-purple-600 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Kirim Pesan</span>
                        </button>
                    </div>
                </div>

                <!-- Today's Schedule -->
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Jadwal Hari Ini</h3>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3 p-3 border-l-4 border-blue-400 bg-blue-50 rounded-r-lg">
                            <div class="text-blue-600 font-semibold">09:00</div>
                            <div class="flex-1">
                                <p class="font-medium text-gray-900">Matematika</p>
                                <p class="text-sm text-gray-500">Ruang A1</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3 p-3 border-l-4 border-green-400 bg-green-50 rounded-r-lg">
                            <div class="text-green-600 font-semibold">11:00</div>
                            <div class="flex-1">
                                <p class="font-medium text-gray-900">Bahasa Inggris</p>
                                <p class="text-sm text-gray-500">Ruang B2</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3 p-3 border-l-4 border-purple-400 bg-purple-50 rounded-r-lg">
                            <div class="text-purple-600 font-semibold">14:00</div>
                            <div class="flex-1">
                                <p class="font-medium text-gray-900">Fisika</p>
                                <p class="text-sm text-gray-500">Lab Sains</p>
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
        });
    </script>
</body>
</html>