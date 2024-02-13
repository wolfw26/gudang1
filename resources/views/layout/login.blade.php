<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julee&family=Lato:ital,wght@0,300;1,400&family=Oswald:wght@200;300;700&family=Syne+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resources/css/app.css')
    @livewireStyles
    <title>LOGIN</title>

</head>

<body>
    <div class="p-0 m-0">
        @yield('konten')
    </div>
    @livewireScripts
</body>

</html>