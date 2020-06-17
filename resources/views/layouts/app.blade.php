<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="bg">
            <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
                <div class="container">
                <div class="navbar-brand">
                <a class="navbar-item" href="{{route('home')}}">
                    <img src="{{asset('images/logo.jpg')}}"alt="Logo">
                </a>
            
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
                </div>
            
                <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item is-tab">
                    Learn
                    </a>
            
                    <a class="navbar-item is-tab">
                    Discuss
                    </a>
                    <a class="navbar-item is-tab">
                    Share
                    </a>
                </div>   
                <div class="navbar-end is-aligned-right ">
                    @if (Auth::guest())
                    <div class="navbar-item">
                        <div class="buttons">
                        <a class="button is-primary" href="{{route('register')}}">
                            <strong>Sign up</strong>
                        </a>
                    <a class="button is-light" href="{{route('login')}}">
                            Log in
                        </a>
                        </div>
                    </div>
                    @else
                        <div class="navbar-item">
                            <div class="navbar-item has-dropdown is-hoverable ">
                                <a class="navbar-link">
                                Hey Alex
                                </a>
                        
                                <div class="navbar-dropdown">
                                <a class="navbar-item">
                                    <span class="icon"><i class="fa fa-fw fa-user-circle-o m-r-10"></i></span>
                                    Profile Main
                                </a>
                                <a class="navbar-item">
                                    <span class="icon"><i class="fa fa-fw fa-bell m-r-10"></i></span>
                                    Setting
                                </a>
                                <a class="navbar-item">
                                    <span class="icon"><i class="fa fa-fw fa-cog m-r-10"></i></span>
                                    Contact
                                </a>
                                <hr class="navbar-divider">
                                <a class="navbar-item">
                                    <span class="icon"><i class="fa fa-fw fa-sign-out m-r-10"></i></span>
                                   Logout
                                </a>
                                </div>
                            </div>
                        </div>
                    @endif


                        </div>
                    </div>
                </div>
            </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
