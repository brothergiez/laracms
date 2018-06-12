<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LaraCMS</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <section>
            <nav class="navbar is-light">
                <div class="container">
                    <div class="navbar-brand">
                        <a href="{{ route('home') }}" class="navbar-item">
                            <img src="{{ asset('images/new-logo-beta.png') }}" alt="LaraCMS Logo" width="90" height="28">
                        </a>
                        <div class="navbar-burger navbar" data-target="navbarTarget">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div id="navbarTarget" class="navbar-menu">
                        <div class="navbar-start">
                            <a href="{{ route('home') }}" class="navbar-item">Home</a>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a href="#" class="navbar-link">Docs</a>
                                <div class="navbar-dropdown is-boxed">
                                    <a href="#" class="navbar-item">Learn</a>
                                    <a href="#" class="navbar-item">Discuss</a>
                                    <a href="#" class="navbar-item">Share</a>
                                    <hr class="navbar-divider">
                                    <a href="#" class="navbar-item">Tutorial</a>
                                    <a href="#" class="navbar-item is-active">Components</a>
                                </div>
                            </div>
                        </div>

                        <div class="navbar-end">
                            @if (Auth::guest())
                                <a href="{{ route('login') }}" class="navbar-item">Login</a>
                                <a href="{{ route('register') }}" class="navbar-item">Sign Up</a>
                            @else
                                <div class="navbar-item has-dropdown is-hoverable is-boxed">
                                <div class="navbar-link navbar-item">Hy Admin </div>
                                    <div class="navbar-dropdown is-boxed">
                                        <a href="#" class="navbar-item"><i class="fa fa-fw m-r-10 fa-user-circle o"></i> Profile</a>
                                        <a href="#" class="navbar-item"><i class="fa fa-fw m-r-10 fa-cog"></i> Setting</a>
                                        <hr class="navbar-divider">
                                        <a href="#" class="navbar-item"><i class="fa fa-fw m-r-10 fa-sign-out"></i> Logout</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </nav>
        </section>
        <section class="section">
            <main class="py-4">
                @yield('content')
            </main>
        </section>
    </div>
</body>
</html>
