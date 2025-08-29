<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Dashboard LMS</title>
</head>
<body class="bg-gray-100">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md flex flex-col">
      <div class="h-16 flex items-center justify-center border-b">
        <span class="font-bold text-xl text-blue-600">LMS-Bekantan</span>
      </div>
      <nav class="flex-1 py-6">
        <ul class="space-y-2">
          <li>
            <a href="#" class="flex items-center px-6 py-2 text-blue-600 bg-blue-100 rounded-lg font-semibold">
              <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"></path>
              </svg>
              Dashboard
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
              <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M8 16h8M8 12h8m-8-4h8M3 6h18"></path>
              </svg>
              Materi
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
              <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="3"></circle>
                <path d="M19.4 15A7.967 7.967 0 0 0 21 12c0-4.418-3.582-8-8-8S5 7.582 5 12a7.967 7.967 0 0 0 1.6 3"></path>
              </svg>
              Siswa
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
              <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M3 7v4a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V7"></path>
                <path d="M16 21v-4a4 4 0 0 0-8 0v4"></path>
              </svg>
              Pengajar
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center px-6 py-2 text-gray-600 hover:bg-gray-100 rounded-lg">
              <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M5 13l4 4L19 7"></path>
              </svg>
              CBT/Ujian
            </a>
          </li>
        </ul>
      </nav>
      <div class="p-6 border-t">
        <button class="w-full px-4 py-2 bg-red-100 text-red-600 rounded-lg font-semibold hover:bg-red-200">Logout</button>
      </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <!-- Header -->
      <header class="h-16 bg-white shadow flex items-center px-8">
        <div class="flex-1">
          <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
          <p class="text-gray-500">Selamat datang di aplikasi LMS-Bekantan!</p>
        </div>
        <div>
          <span class="inline-flex items-center px-3 py-1 rounded-full bg-blue-100 text-blue-700 font-medium text-sm">
            Joko
          </span>
        </div>
      </header>

      <!-- Content -->
      <main class="flex-1 p-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
          <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center">
            <span class="text-3xl font-bold text-blue-600">15</span>
            <span class="text-gray-500 mt-2">Materi</span>
          </div>
          <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center">
            <span class="text-3xl font-bold text-green-600">8</span>
            <span class="text-gray-500 mt-2">Siswa Aktif</span>
          </div>
          <div class="bg-white rounded-xl shadow p-6 flex flex-col items-center">
            <span class="text-3xl font-bold text-yellow-600">4</span>
            <span class="text-gray-500 mt-2">Pengajar</span>
          </div>
        </div>

        <div class="bg-white rounded-xl shadow p-6">
          <h2 class="text-xl font-bold mb-4">Pengumuman</h2>
          <ul class="list-disc pl-5 text-gray-700 space-y-2">
            <li>Jadwal Ujian CBT dimulai minggu depan.</li>
            <li>Update fitur materi interaktif di dashboard.</li>
            <li>Pastikan profil kamu sudah lengkap.</li>
          </ul>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
