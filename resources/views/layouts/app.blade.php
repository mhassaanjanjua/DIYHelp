<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DIY-Help</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/slick.js') }}" defer></script>
    <script src="{{ asset('js/lightgallery-all.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightgallery.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

</head>

<body>
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
                    <div class="gen-info">
                        <ul class="general-info">
                            <li>
                                <a href="tel:+(49) 176 576 665">
                                    <i class="fa fa-phone"></i><span> Phone: +(49) 176 576 665</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-map-marker"></i><span>Frankengut Str. 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:contact@diy-help.com">
                                    <i class="fa fa-envelope"></i><span>Email:contact@diy-help.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                    <div class="social-info">
                        <ul class="social-icon">
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-facebook-official"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-lg-2 col-xs-12">
                    <div class="logo">
                        <a href="index.html">
                            <img src="/images/logo.png" class="img-responsive" />
                        </a>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-lg-7 col-xs-12">
                    <div class="nav">
                        <ul class="nav-menu">
                            <li>
                                <a href="index.html">HOME</a>
                            </li>
                            <li>
                                <a href="javascript:;">ABOUT</a>
                            </li>
                            <li>
                                <a href="javascript:;">SERVICES</a>
                            </li>
                            <li>
                                <a href="javascript:;">BLOG</a>
                            </li>
                            <li>
                                <a href="category.html">CATEGORIES</a>
                            </li>
                            <li>
                                <a href="contact.html">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
                    <div class="search">
                        <form class="searchform" name="searchform" id="searchform">
                            <input type="search" name="s" class="search" id="search" placeholder="Search...">
                            <span class="searchformsubmit">
                                <input type="submit" name="searchformsubmit" value="">
                                <i class="fa fa-search"></i>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="header-caption">
                        <div class="header-caption-inner">
                            <h3>We connect house holds with professionals</h3>
                            <p>DIY Help provides platform to domestic households with professionals. </p>
                        </div>
                        <div id="app">
                            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                                <div class="container">

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                        <!-- Right Side Of Navbar -->
                                        <ul class="navbar-nav ml-auto">
                                            <!-- Authentication Links -->
                                            @guest
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                            @endif
                                            @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                            @endguest
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="py-4">
        @yield('content')
    </main>

</body>

</html>