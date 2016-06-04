<html>
    <head>
        <title>ElliotForbes.co.uk</title>
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/front-end.css') }}">
    </head>
    <body>
        
        <h2>Our Nav Goes here</h2>
        
        @yield('content')    
        
        <div class="footer">
            <h2>Our Footer Stuff Goes here</h2>
        </div>
        
    </body>
</html>