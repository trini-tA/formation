@include('scripts')
@include('styles')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel - Formation </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        @stack('head')
    </head>
    <body>
        <header>
            @include( 'layouts.navbar' )
        </header>
        
        <div class="main">
            @yield('content')
        </div>


        
        @stack('footer')
    </body>
</html>
