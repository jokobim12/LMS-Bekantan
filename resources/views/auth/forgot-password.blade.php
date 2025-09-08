<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lupa Password</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .logo-section {
            text-align: center;
            margin-bottom: 30px;
            z-index: 2;
            position: relative;
        }

        .logo-circle {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .logo-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%; /* ini bikin gambar benar-benar bulat */
        }
    </style>
</head>
<body class="bg-gradient-to-r from-cyan-400 to-blue-500 min-h-screen flex items-center justify-center">

  <div class="bg-white rounded-2xl shadow-lg overflow-hidden w-full max-w-4xl grid md:grid-cols-2">
    <!-- Left Side -->
    <div class="p-8 bg-gradient-to-r from-cyan-500 to-blue-600 flex flex-col justify-center text-white">
      <div class="text-center">
        <div class="logo-section">
                <div class="logo-circle">
                    <img src="{{ asset('FOTO/LOGO.jpeg') }}" alt="Logo">
                </div>
                <div class="logo-text"></div>
        </div>
        <h2 class="text-2xl font-bold">BEKANTANJANTAN</h2>
        <p class="mt-4 text-lg font-semibold">Tempat Belajar & Berbagi Ilmu</p>
        <p class="text-sm opacity-90">Satu langkah menuju pengalaman belajar digital yang menyenangkan.</p>
      </div>
    </div>

    <!-- Right Side -->
    <div class="p-8 flex flex-col justify-center">
      <h1 class="text-2xl font-bold mb-6 text-gray-800">Lupa Password?</h1>
      <p class="text-sm text-gray-600 mb-6">Masukkan email Anda untuk menerima link reset password.</p>
      <form class="space-y-4">
        <div>
          <label class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" class="w-full mt-1 px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex items-center justify-between">
          <a href="{{ url('/login') }}" class="text-sm text-gray-600 hover:underline">Kembali ke Login</a>
          <button type="button"
            class="{{ url('/reset-password') }}">
            Kirim Link Reset
          </button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>