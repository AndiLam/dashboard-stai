<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login - Al Masthuriyah</title>
    <link rel="icon" href="{{ asset('images/logo.ico') }}?v=1" type="image/x-icon">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-3xl p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">Selamat Datang</h1>
        <p class="text-center text-gray-600 mb-8 text-lg">Silakan pilih login sebagai <span class="font-semibold">Mahasiswa</span> atau <span class="font-semibold">Dosen</span>.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Login Mahasiswa -->
            <a href="{{ route('loginMhs') }}" class="flex flex-col items-center justify-center bg-blue-500 hover:bg-blue-600 text-white font-semibold py-6 px-4 rounded-lg shadow-md transform transition duration-300 hover:scale-105">
                <div class="text-5xl font-extrabold mb-4">👩‍🎓</div>
                <span class="text-xl">Login Mahasiswa</span>
            </a>
            <!-- Login Dosen -->
            <a href="{{ route('loginDsn') }}" class="flex flex-col items-center justify-center bg-green-500 hover:bg-green-600 text-white font-semibold py-6 px-4 rounded-lg shadow-md transform transition duration-300 hover:scale-105">
                <div class="text-5xl font-extrabold mb-4">👨‍🏫</div>
                <span class="text-xl">Login Dosen</span>
            </a>
        </div>
    </div>
</body>
</html>
