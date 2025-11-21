<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
</head>
<body>
     @include('template.navbar')
    <div class="container">
       
        @yield('content')
        @include('script')
    </div>
       


    <script src="{{ asset('./public/assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('./public/assets/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('./public/assets/lib/jquery/main.js') }}"></script>
</body>
</html>