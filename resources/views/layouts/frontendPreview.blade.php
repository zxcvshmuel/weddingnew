<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="min-h-screen">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <title>
        הזמנה בקליק
    </title>
    @livewireStyles
    @vite(['resources/css/frontend.css', 'resources/js/frontend.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;700&amp;display=swap" rel="stylesheet" />
    
</head>

<body class="min-h-screen preview-layout">

    <livewire:frontend.header/>
    
    {{ $slot }}


    @livewireScripts
    
</body>
</html>