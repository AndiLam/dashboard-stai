<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>My Academic Dashboard</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body>
    <div class="wrapper">
        @include('layouts.sidebar')
        <div class="content">
            @include('layouts.header')
            <main>
                @yield('content')
            </main>
        </div>
    </div>
    @include('layouts.footer')
    <!-- JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
