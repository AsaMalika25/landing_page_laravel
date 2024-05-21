<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container py-5">
        {{-- @if (Auth::check()) --}}
        {{-- @endif --}}
        @include('komponen/menu')
        @include('komponen/pesan')    
            <div class="container-sm">@yield('konten')</div>
        </div>

        <script src="{{ asset('public/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>