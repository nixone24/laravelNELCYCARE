<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
</head>
<body>

@include('template.navbar')
@yield('content')
@include('script')
</body>
</html>