<!DOCTYPE html>
<html>
    <head>
        <title>App Name - @yield('title')</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="{{  url("/") }}/common.css" rel="stylesheet">
    </head>

    <body>
        <div class="navbar-fixed">
            <nav
                <div class="nav-wrapper">
                <a href='{{ config('app.url') }}' class="brand-logo">{{ config('app.name') }}</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    @guest
                    <li><a href="login">Log In</a></li>
                    @endguest
                    @auth
                    <li><a href="{{ route('Books.index') }}">Books</a></li>
                    <li><a href="{{ route('Categories.index') }}">Categories</a></li>
                    <li><a href="{{ route('Users.index') }}">Users</a></li>
                    <li><a href="{{ route('logout') }}">LogOut</a></li>
                    @endauth
                </ul>
                </div>
            </nav>
        </div>
        <div class='container'>
            @yield('content')
        </div>
        <!--JavaScript at end of body for optimized loading-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            M.AutoInit();
        </script>
    </body>
</html>
