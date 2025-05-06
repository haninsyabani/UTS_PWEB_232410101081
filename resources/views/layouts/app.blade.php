<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris ETALASE</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-br from-red-700 via-red-800 to-red-900">

    
    @if (!Request::is('login'))
        @include('components.navbar')
    @endif

   
    <main class="px-4 sm:px-8 py-6">
        @yield('content')  
    </main>

    
    @if (!Request::is('login') && !Request::is('profile'))
        @include('components.footer')
    @endif

    
    @vite('resources/js/app.js')

</body>

</html>
