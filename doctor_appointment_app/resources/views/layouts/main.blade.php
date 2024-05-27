<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body> 
<div class="container-fluid">
   {{-- shortnav start --}}
   @include('inc.shortnav')
{{-- shortnav End --}}
   {{-- Navbar start --}}
   @include('inc.navbar')
{{-- Navbar End --}}
@include('inc.flash')
{{-- flash message end --}}
{{-- Navbar End --}}
@include('inc.error')
{{-- flash message end --}}

<div class="row">
    <div class="col-md-12">
        @yield('content')
    </div>    
</div>

</div>
@include('inc.footer')
{{-- footer start --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
{{-- footer end --}}
</body>
</html>