<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="{{asset('/css/app.css')}}"/> 
    </head>
    <body>
        @yield('menu')
        
        @yield('sidebar')
        @yield('footer')
        <script src='{{asset("/js/app.js")}}' />
    </body>
</html>




