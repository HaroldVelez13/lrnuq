<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">        
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        @yield('meta')
        <title>LRNUQ - @yield('title')</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        @section('style_css') 
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @show
    </head>
    <body>
    
    @include('layouts.navbar')

    <main class="container"> 
        @yield('content')
    </main>

    @yield('content_two')    
    @include('layouts.footer')
    @section('javascript')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
        <script src="{{asset('js/lrnuq.js')}}"></script>      
    @show
    </body>
</html>