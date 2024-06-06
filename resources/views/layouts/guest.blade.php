@props(['formTitle' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-black antialiased">
    <div class="min-h-screen flex sm:justify-center items-end pt-6 sm:pt-0 bg-white">
        <div class="w-full">
            <img class="size-fit" src="/img/vector3.jpg">
        </div>
        <div class="w-full h-screen sm:max-w-md mt-6 px-6 py-4 bg-[#6043AD] shadow-md overflow-hidden sm:rounded-lg">
            <img class="mx-auto pt-36 pb-11" src="/img/logo GIFTOON.png" alt="">
            <h1 class="text-5xl text-slate-50 text-center">{{ $formTitle }}</h1>
            <div class="pt-20">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>