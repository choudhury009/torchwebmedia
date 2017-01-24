<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Torch Web Media</title>
    <meta name="description" content="Torch Web Media">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">

    <link rel="stylesheet" type="text/css" href="css/layer.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/img/icons/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/img/icons/favicon.ico" type="image/x-icon">

    @yield('head')
</head>

<body class="" style="background-color: rgb(240, 240, 240)">
<nav id="mob-nav">
    <div class="nav-panel">
        <ul class="menu-list">
            <li><a class="nav-close main-toggle" style="padding-bottom:25px;"><p></p></a></li>
            <li><a class="" href="/"><p>Home</p></a></li>
            <li><a class="" href="/about-us"><p>About us</p></a></li>
            <li><a class="" href="/portfolio"><p>Portfolio</p></a></li>
            <li><a class="" href="/contact"><p>Contact</p></a></li>
        </ul>
    </div>
</nav>
<header>
    <div class="menu-primary">
        <a id="nav-btn" class="main-toggle" style="padding: 16px 25px;"></a>
    </div>
    <div class="menu-secondary">
        <a href="/" style="position:absolute;top:10px;right:10px;">Torch Web Media</a>
    </div>
    <div class="menu-logo">
        {{--<a href="/">--}}
            {{--<img src="/img/muzzinilogo.png" alt="Muzzini" style="width: 100px;">--}}
        {{--</a>--}}
    </div>
    <div class="navbar-default" style="position:fixed; width:100%; background-color: rgb(240, 240, 240);">
        <div class="brand" style="float: left;">
            <a href="/" style="position: absolute;top:-18px;">
                {{--<img src="/img/muzzinilogo.png" alt="Muzzini" style="width: 100px;">--}}
            </a>
            <a href="/cart" style="position:absolute;top:-18px;right:0;">
                {{--<img src="/img/shop/basketicon.png" alt="Muzzini" border="0" style="height: 40px;">--}}
            </a>
        </div>

        <div>
            <ul class="nav navbar-nav">
                <li><a href="/">Torch Web Media</a></li>
            </ul>
        </div>

        <div class="" style="float: right">
            <ul class="nav navbar-nav">
                <li><a class="" href="/">Home</a></li>
                <li><a class="" href="/about-us">About us</a></li>
                <li><a class="" href="/portfolio">Portfolio</a></li>
                <li><a class="" href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
    @yield('header')
</header>

<main>
    @if(session()->has('ok'))
        @include('partials/error', ['type' => 'success', 'message' => session('ok')])
    @endif
    @if(session()->has('fail'))
        @include('partials/error', ['type' => 'danger', 'message' => session('fail')])
    @endif
    @if(isset($info))
        @include('partials/error', ['type' => 'info', 'message' => $info])
    @endif
    @yield('main')
</main>

<footer>
    <div id="footer-wrapper" class="text-center" style="color:white; background-color: #4A4A4A">

        {{--<div>--}}
            {{--<ul class="footer-middle" style="">--}}
                {{--<li><a class="" href="/"><p>Home</p></a></li>--}}
                {{--<li><a class="" href="/about-us"><p>About us</p></a></li>--}}
                {{--<li><a class="" href="/portfolio"><p>Portfolio</p></a></li>--}}
                {{--<li><a class="" href="/contact"><p>Contact</p></a></li>--}}
            {{--</ul>--}}
            {{--<hr>--}}
            {{--<span>We accept the following</span>--}}
            {{--<br>--}}
            {{--<img style="width: 150px;" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png" alt="Buy now with PayPal">--}}
            {{--<br>--}}
            {{--<span>Copyright &copy; 2017 Muzzini. All images and rights reserved.</span>--}}
        {{--</div>--}}
    </div>

    @yield('footer')
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    $(function() {
        // side navigation control
        var click = 0;
        var mainNav = $('#mob-nav');
        $('a.main-toggle').off().on('click', function() {
            if (click == 0) {
                click = 1;
                mainNav.animate({left: '0'}, 400);
                mainNav.addClass('open');
            } else {
                click = 0;
                mainNav.animate({left: '-300px'}, 400);
                mainNav.removeClass('open');
            }
        });
    });
</script>

@yield('scripts')

</body>
</html>