<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Doctor Appointment</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    </head>

    <body class="container-fluid font-sans antialiased dark:bg-black dark:text-white/50">
        {{-- short Navbar start--}}
        @include('inc.shortnav')
        {{-- short Navbar end --}}

        {{-- Navbar strat --}}
        @include('inc.navbar')
        {{-- Navbar end --}}

        {{--login and register start --}}
         {{-- @include('inc.login') --}}
         {{--login and register end  --}}

        {{-- Main start --}}
        @include('inc.homepage')
        {{-- Main end --}}
       
        {{-- Footer start --}}
        @include('inc.footer')
        {{-- Footer end --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
