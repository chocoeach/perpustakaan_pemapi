<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>@yield('title') - Sistem Perpustakaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  {{-- Tailwind CSS CDN --}}
  <script src="https://cdn.tailwindcss.com"></script>
  
  <style>
    body {
      @apply bg-gradient-to-br from-gray-900 to-gray-800 text-white min-h-screen flex items-center justify-center font-[Poppins];
    }
  </style>
</head>
<body>
  <div class="bg-gray-900 border border-gray-700 shadow-lg rounded-2xl px-8 py-10 w-full max-w-md">
    <div class="flex items-center gap-4 mb-6">
      <img src="https://img.icons8.com/fluency/48/books.png" alt="logo" class="w-10 h-10" />
      <div>
        <h1 class="text-2xl font-bold text-orange-400">Sistem Perpustakaan</h1>
        <p class="text-sm text-gray-400">Silakan login untuk melanjutkan</p>
      </div>
    </div>

    <h2 class="text-xl font-semibold text-center text-white mb-6">@yield('title')</h2>

    @yield('content')

    <p class="text-xs text-center text-gray-500 mt-8">&copy; 2025 Sistem Perpustakaan</p>
  </div>
</body>
</html>
