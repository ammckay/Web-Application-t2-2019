<!DOCTYPE html> 
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <!-- css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    </head>
    <body>
        @yield('content')
    </body> 
</html>