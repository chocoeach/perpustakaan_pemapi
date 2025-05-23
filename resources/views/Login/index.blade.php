<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 to-gray-800 text-white flex items-center justify-center min-h-screen font-[Poppins]">
    <div class="bg-gray-900 border border-gray-700 p-8 rounded-2xl shadow-lg w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-center text-orange-400">Login</h2>

        {{-- Menampilkan pesan error --}}
        @if ($errors->any())
            <div class="bg-red-600 text-white p-3 rounded mb-4 text-sm shadow-md">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4 text-left">
                <label class="block text-sm font-medium text-gray-300 mb-1" for="email">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="you@example.com" required>
            </div>
            <div class="mb-6 text-left">
                <label class="block text-sm font-medium text-gray-300 mb-1" for="password">Password</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-600 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-400" placeholder="••••••••" required>
            </div>
            <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-lg transition duration-200 font-medium">Login</button>
        </form>
    </div>
</body>
</html>
