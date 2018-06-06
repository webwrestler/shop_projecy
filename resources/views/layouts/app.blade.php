<!DOCTYPE HTML>
<!--
	Royale by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>@yield('title')</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <!--[if lte IE 8]><scrxipt src="{{asset('js/html5shiv.js')}}"></scrxipt><![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="{{asset('js/skel.min.js')}}"></script>
    <script src="{{asset('js/skel-panels.min.js')}}"></script>
    <script src="{{asset('js/init.js')}}"></script>


    <link rel="stylesheet" href=" {{asset('css/skel-noscript.css')}}" />
        <link rel="stylesheet" href=" {{asset('css/style.css')}}" />
        <link rel="stylesheet" href=" {{asset('css/style-desktop.css')}}" />
        <link rel="stylesheet" href=" {{asset('css/style-table.css')}}" />

    <!--[if lte IE 8]><link rel="stylesheet" href="{{asset('css/ie/v8.css')}}" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="{{asset('css/ie/v9.css')}}" /><![endif]-->

</head>
<body class="homepage">

<!-- Header -->
<div id="header">
    <div class="container">

        <!-- Logo -->
        <!-- Logo -->
        <div id="logo">
            <h1><a href="http://laravel.webwrestler.com.ua">Royale shop</a></h1>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                @if( !Auth::user())
                <li class="active"><a href="{{ route('login') }}">Login UP</a></li>
                <li><a href="{{ route('register') }}">Registration</a></li>
                @elseif(Auth::user()->status == 1)
                    @if ($_SERVER['REQUEST_URI'] == "/admin")
                    <li class="active"><a href="{{ route('admin') }}">Admin consol</a></li>
                    <li><a href="{{ route('admin/category') }}">Category</a></li>
                    <li><a href="{{ route('admin/product') }}">Product</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                    @elseif($_SERVER['REQUEST_URI'] == "/admin/product")
                        <li><a href="{{ route('admin') }}">Admin consol</a></li>
                        <li><a href="{{ route('admin/category') }}">Category</a></li>
                        <li class="active"><a href="{{ route('admin/product') }}">Product</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    @elseif($_SERVER['REQUEST_URI'] == "/admin/category")
                        <li><a href="{{ route('admin') }}">Admin consol</a></li>
                        <li class="active"><a href="{{ route('admin/category') }}">Category</a></li>
                        <li><a href="{{ route('admin/product') }}">Product</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    @else
                    <li class="active"><a href="{{ route('admin') }}">Admin consol</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                    @endif
                @else
                <li class="active"><a href="{{ route('logout') }}">Logout</a></li>
                @endif
            </ul>
        </nav>

    </div>
</div>
<!-- Header -->
@yield('content')

<!-- Footer -->
<div id="footer">
    <div class="container">
        <section>
            <header>
                <h2>Pellentesque vulputaterisus semper!</h2>
                <span class="byline">In posuere eleifend semper augue maecenas ligula congue rutrum</span>
            </header>
            <div class="row">
                <section class="4u">
                    <a href="#" class="image full"><img src="{{asset('images/pics03.jpg')}}" alt=""></a>
                </section>
                <section class="4u">
                    <a href="#" class="image full"><img src="{{asset('images/pics04.jpg')}}" alt=""></a>
                </section>
                <section class="4u">
                    <a href="#" class="image full"><img src="{{asset('images/pics05.jpg')}}" alt=""></a>
                </section>
            </div>
            <a href="#" class="button">Nulla luctus eleifend</a>
        </section>
    </div>
</div>
<!-- /Footer -->

<!-- Copyright -->
<div id="copyright">
    <div class="container">
        Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
    </div>
</div>
</body>
</html>