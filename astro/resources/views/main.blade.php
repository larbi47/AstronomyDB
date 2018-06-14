<!doctype html>
<html lang="en">
    <head>
    @include('partials._head')
    </head>
    <body>
        @include('partials._nav')
        <br />
        <div class="container">

            @include('partials._messages')
        
            @yield('content')

        </div>
        @include('partials._scripts')
    </body>
</html>