<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bincang_</title>
    <link rel="icon" href="/storage/images/Bincang_.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

    {{-- @vite([
        'resources/sass/app.scss', 
        'resources/js/app.js'
    ]) --}}

    @stack('styles')
</head>
<body>
    <div id="app">
        <x-navbar />

        <div id="main-content">
            @yield('content')

            <x-footer />
        </div>
    </div>
    
    @stack('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
