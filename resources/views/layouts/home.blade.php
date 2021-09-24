<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>


    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="ALİ ÇEVİK">

    <!-- Font awesome -->
    <link href="{{asset('assets')}}/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{asset('assets')}}/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="{{asset('assets')}}/css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{asset('assets')}}/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
    @yield('headerjs')

</head>
<body>

@include('home._header')


<section id="menu">
    <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    @include('home._menu')

                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>
<!-- / menu -->

@section('content')
    İçerik alanı

@show

@include('home._footer')
@yield('footerjs')
</body>
</html>
