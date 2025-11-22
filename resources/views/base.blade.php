<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/lib/bootstrap/css/css2.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-icons/bootstrap-icons.css')}}">
    

    <title>{{ config('app.name') }} - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
    
</head>
<body>
     @include('template.navbar')
    <div class="container">
       
        @yield('content')
               

        @include('script')
    </div>
       
</body>
</html>