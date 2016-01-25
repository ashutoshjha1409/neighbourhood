<!DOCTYPE html>
<html>
    <head>        
        @include('header')
        @yield('title')
    </head>
    <body>
        <!-- <div id="preloader"></div> -->

        <div class="main">            
            @yield('content')

            @include('footer')            
        </div>

        <script type="text/javascript">
        </script>
    </body>
</html>
