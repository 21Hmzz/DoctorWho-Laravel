<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @yield('styles')
    <title>
        @yield('title')
    </title>
</head>
<body>
    @yield('content')
<footer>
    <div class="bg-gray-800 p-4 text-white">
        <div class="flex justify-center items-center gap-1">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}</p>
            <p>
                GitHub: <a target="_blank" href="https://github.com/21Hmzz" class="text-blue-400">21Hmzz</a>
            </p>
        </div>
    </div>
</footer>
</body>
    @yield('scripts')
</html>
