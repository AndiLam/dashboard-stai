<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login - Al Masthuriyah</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full">
            <div class="text-center mb-8">
                <h1 class="text-2xl font-semibold text-green-700 mb-2">Selamat Datang</h1>
                <p class="text-gray-500">Silakan login untuk melanjutkan ke dashboard</p>
            </div>

            <!-- Tempat konten dari halaman lain -->
            @yield('content')
        </div>
    </div>

</body>
</html>
