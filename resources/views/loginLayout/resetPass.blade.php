<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>My Academic - Al Masthuriyah</title>
    <link rel="icon" href="{{ asset('images/logo.ico') }}?v=1" type="image/x-icon">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full">
            <div class="mb-8">
                <img src="{{ asset('images/STAI.png') }}" alt="LOGO" class=" w-2/5 h-2/5 mx-auto mb-2 object-cover">
            </div>
            @yield('content')
        </div>
    </div>

</body>
</html>
