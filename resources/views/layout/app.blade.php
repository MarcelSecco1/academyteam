<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="AcademyTeam é uma plataforma de cursos online para todo o publico de forma gratuita!">
    <meta name="keywords"
        content="AcademyTeam, cursos, online, gratuitos, programação, desenvolvimento, web, mobile, design, marketing, negócios, tecnologia">
    <meta name="author" content="AcademyTeam">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <meta property="og:title" content="AcademyTeam" />
    <meta property="og:description"
        content="AcademyTeam é uma plataforma de cursos online para todo o publico de forma gratuita!" />
    <meta property="og:image" content="{{ asset('images/logo.png') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="AcademyTeam" />
    <meta property="og:locale" content="pt_BR" />

    <link rel="icon" href="{{ asset('/assets/images/200x200.png') }}" type="image/x-icon">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen">

    @livewire('components.navbar')

    <main class="py-10 lg:pl-72 flex-grow">
        <div class="px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    @livewire('components.footer')
    @livewireScripts
</body>

</html>
