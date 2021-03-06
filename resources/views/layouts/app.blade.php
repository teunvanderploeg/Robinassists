<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href='{{ mix("css/main.css") }}' rel='stylesheet'/>
    <link rel="stylesheet" href="{{ asset('css/extra.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src='{{ mix("js/main.js") }}'></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.setOption('contentHeight', 450);
            calendar.render();
        });
    </script>
</head>
<body class="font-sans antialiased overflow-hidden">
<div class="min-h-screen bg-white">
@include('layouts.navigation')

<!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>

@include('layouts.footer')
</body>
</html>
