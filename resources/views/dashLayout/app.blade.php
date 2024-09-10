<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>My Academic Dashboard</title>
        <!-- Font Awesome for Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body class="h-screen flex overflow-hidden bg-gray-100">
    @yield('sidebar')
    <div class="flex-1 flex flex-col overflow-hidden">
        @include('dashLayout.header')
        <main class="flex-1 overflow-y-auto p-4 bg-white">
            @yield('content')
        </main>
        @include('dashLayout.footer')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
