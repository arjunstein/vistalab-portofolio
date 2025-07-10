<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Page title' }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-tr from-gray-50 via-white to-blue-50 text-gray-800 font-sans leading-relaxed">

    <!-- Header -->
    @include('components._partials.header')
    {{-- Header End --}}

    {{ $slot }}

    <!-- Footer -->
    @include('components._partials.footer')
    {{-- Footer End --}}

</body>

</html>
