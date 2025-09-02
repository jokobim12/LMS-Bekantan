<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduMin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .sidebar {
            background: linear-gradient(to bottom, #1e3a8a, #1e40af);
        }
        
        .sidebar-compact {
            width: 220px; /* Lebih kecil dari 256px (w-64) */
        }
        
        .stat-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        .chart-container {
            position: relative;
            height: 250px;
        }

        /* Custom scrollbar for sidebar */
        .sidebar-scrollable::-webkit-scrollbar {
            width: 4px;
        }
        
        .sidebar-scrollable::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 2px;
        }
        
        .sidebar-scrollable::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 2px;
        }
        
        .sidebar-scrollable::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.5);
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <!-- Sidebar -->
        <div class="sidebar-compact sidebar text-white min-h-screen fixed flex flex-col">
            <!-- Header - Fixed at top -->
            <div class="p-3 flex-shrink-0">
                <h1 class="text-xl font-bold flex items-center">
                    <i class="fas fa-graduation-cap mr-2"></i> EDUMIN
                </h1>
            </div>
            
            <!-- Navigation - Scrollable -->
            <nav class="flex-1 overflow-y-auto sidebar-scrollable pb-4">
                <div class="px-2 py-1 text-sm uppercase text-blue-200 font-semibold">Aktivitas</div>
                <a href="#" class="block px-2 py-1 text-white hover:bg-blue-700 transition duration-150 text-sm"><i class="fas fa-chart-bar w-4 mr-2"></i>Total Mahasiswa</a>
                <a href="#" class="block px-2 py-1 text-white hover:bg-blue-700 transition duration-150 text-sm"><i class="fas fa-calendar-day w-4 mr-2"></i>Total Dosen</a>
                <a href="#" class="block px-2 py-1 text-white hover:bg-blue-700 transition duration-150 text-sm"><i class="fas fa-calendar-day w-4 mr-2"></i>Total Manager</a>
                
                <div class="px-2 py-1 mt-4 text-sm uppercase text-blue-200 font-semibold">Team Management</div>
                <a href="#" class="block px-2 py-1 text-white hover:bg-blue-700 transition duration-150 text-sm"><i class="fas fa-briefcase w-4 mr-2"></i> Kelola Akun</a>
                <a href="#" class="block px-2 py-1 text-white hover:bg-blue-700 transition duration-150 text-sm"><i class="fas fa-clipboard-list w-4 mr-2"></i> Kelola Kelas</a>
                <a href="#" class="block px-2 py-1 text-white hover:bg-blue-700 transition duration-150 text-sm"><i class="fas fa-book w-4 mr-2"></i> Kelola Ruangan</a>
                <a href="#" class="block px-2 py-1 text-white hover:bg-blue-700 transition duration-150 text-sm"><i class="fas fa-tools w-4 mr-2"></i> Kelola Matakuliah</a>
                <a href="#" class="block px-2 py-1 text-white hover:bg-blue-700 transition duration-150 text-sm"><i class="fas fa-bullseye w-4 mr-2"></i> Kelola Absensi</a>
                <a href="#" class="block px-2 py-1 text-white hover:bg-blue-700 transition duration-150 text-sm"><i class="fas fa-users w-4 mr-2"></i> Kelola Program Studi</a>
                <a href="#" class="block px-2 py-1 text-white hover:bg-blue-700 transition duration-150 text-sm"><i class="fas fa-umbrella-beach w-4 mr-2"></i> Kelola Cuti</a>
                <a href="#" class="block px-2 py-1 text-white hover:bg-blue-700 transition duration-150 text-sm"><i class="fas fa-money-bill-wave w-4 mr-2"></i> Kelola Jadwal</a>
                <a href="#" class="block px-2 py-1 text-white hover:bg-blue-700 transition duration-150 text-sm"><i class="fas fa-heartbeat w-4 mr-2"></i> Kelola Materi</a>
                <a href="#" class="block px-2 py-1 text-white hover:bg-blue-700 transition duration-150 text-sm"><i class="fas fa-th w-4 mr-2"></i> Kelola Tugas</a>
                <a href="#" class="block px-2 py-1 text-white hover:bg-blue-700 transition duration-150 text-sm"><i class="fas fa-th w-4 mr-2"></i> Kelola Nilai</a>
                <a href="#" class="block px-2 py-1 text-white hover:bg-blue-700 transition duration-150 text-sm"><i class="fas fa-desktop w-4 mr-2"></i> Computer Assisted Test</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 ml-64">
            <!-- Header -->
            <div class="bg-white shadow">
                <div class="flex items-center justify-between px-8 py-4">
                    <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <button class="flex items-center focus:outline-none">
                                <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="ml-2 text-left">
                                    <p class="text-sm font-medium text-gray-700">Admin User</p>
                                    <p class="text-xs text-gray-500">Administrator</p>
                                </div>
                                <i class="fas fa-chevron-down ml-2 text-gray-500"></i>
                            </button>
                        </div>
                        <button class="p-2 rounded-full hover:bg-gray-100 text-gray-500">
                            <i class="fas fa-bell"></i>
                            <span class="absolute top-0 right-0 h-3 w-3 bg-red-500 rounded-full"></span>
                        </button>
                        <button class="flex items-center px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-150">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </button>
                    </div>
                </div>
            </div>

            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Stat Card: Mahasiswa -->
                    <div class="stat-card bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-lg bg-blue-100 text-blue-600">
                                <i class="fas fa-user-graduate text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-gray-500 text-sm font-medium">Mahasiswa</h3>
                                <p class="text-3xl font-bold mt-1">327</p>
                                <p class="text-xs text-green-500 mt-1"><i class="fas fa-arrow-up"></i> 12% from last month</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Stat Card: Total Course -->
                    <div class="stat-card bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-lg bg-green-100 text-green-600">
                                <i class="fas fa-book-open text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-gray-500 text-sm font-medium">Total Pembelajaran</h3>
                                <p class="text-3xl font-bold mt-1">247</p>
                                <p class="text-xs text-green-500 mt-1"><i class="fas fa-arrow-up"></i> 5 new courses</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Stat Card: New Students -->
                    <div class="stat-card bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-lg bg-blue-100 text-blue-600">
                                <i class="fas fa-user-graduate text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-gray-500 text-sm font-medium">Dosen</h3>
                                <p class="text-3xl font-bold mt-1">250</p>
                                <p class="text-xs text-green-500 mt-1"><i class="fas fa-arrow-up"></i> 12% from last month</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Stat Card: Active Learning -->
                    <div class="stat-card bg-white rounded-lg shadow p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-lg bg-yellow-100 text-yellow-600">
                                <i class="fas fa-chalkboard-teacher text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-gray-500 text-sm font-medium">Pembelajaran Aktif</h3>
                                <p class="text-3xl font-bold mt-1">183</p>
                                <p class="text-xs text-green-500 mt-1"><i class="fas fa-arrow-up"></i> 15% more active</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                    <!-- First Chart: Total Mahasiswa Baru -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold">Total Mahasiswa Baru</h3>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 bg-blue-100 text-blue-600 rounded-md text-sm">Mingguan</button>
                                <button class="px-3 py-1 bg-gray-100 text-gray-600 rounded-md text-sm">Bulanan</button>
                                <button class="px-3 py-1 bg-gray-100 text-gray-600 rounded-md text-sm">Tahunan</button>
                            </div>
                        </div>
                        <div class="chart-container">
                            <canvas id="newStudentsChart"></canvas>
                        </div>
                    </div>
                    
                    <!-- Second Chart: Total Pembelajaran Aktif -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold">Total Pembelajaran Aktif</h3>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 bg-blue-100 text-blue-600 rounded-md text-sm">Mingguan</button>
                                <button class="px-3 py-1 bg-gray-100 text-gray-600 rounded-md text-sm">Bulanan</button>
                                <button class="px-3 py-1 bg-gray-100 text-gray-600 rounded-md text-sm">Tahunan</button>
                            </div>
                        </div>
                        <div class="chart-container">
                            <canvas id="activeLearningChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Recent Activities Section -->
                <div class="mt-8 bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold mb-4">Aktivitas Terbaru</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full">
                                <i class="fas fa-user-plus text-blue-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium">Mahasiswa baru mendaftar</p>
                                <p class="text-xs text-gray-500">5 menit yang lalu</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-green-100 p-2 rounded-full">
                                <i class="fas fa-check-circle text-green-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium">Absensi Kelas 3A</p>
                                <p class="text-xs text-gray-500">1 jam yang lalu</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-purple-100 p-2 rounded-full">
                                <i class="fas fa-book text-purple-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium">Matakuliah "Pemrograman Lanjut" ditambahkan</p>
                                <p class="text-xs text-gray-500">3 jam yang lalu</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-yellow-100 p-2 rounded-full">
                                <i class="fas fa-chalkboard-teacher text-yellow-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium">Sesi pembelajaran aktif dimulai</p>
                                <p class="text-xs text-gray-500">5 jam yang lalu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Chart untuk Total Mahasiswa Baru
        const newStudentsCtx = document.getElementById('newStudentsChart').getContext('2d');
        const newStudentsChart = new Chart(newStudentsCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Mahasiswa Baru',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah Mahasiswa'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Bulan'
                        }
                    }
                }
            }
        });

        // Chart untuk Total Pembelajaran Aktif
        const activeLearningCtx = document.getElementById('activeLearningChart').getContext('2d');
        const activeLearningChart = new Chart(activeLearningCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Pembelajaran Aktif',
                    data: [153, 167, 173, 175, 170, 180, 183],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    tension: 0.3,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 150,
                        title: {
                            display: true,
                            text: 'Jumlah Pembelajaran Aktif'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Bulan'
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>