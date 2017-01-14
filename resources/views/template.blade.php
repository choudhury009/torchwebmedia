<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JWL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">

    <link rel="stylesheet" type="text/css" href="css/front.css">
    <link rel="stylesheet" type="text/css" href="css/layer.css">
    <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    @yield('head')

    {{--{!! HTML::style('css/front.css') !!}--}}
    {{--{!! HTML::style('css/popupItem.css') !!}--}}

</head>

<body class="" style="background-color: rgb(240, 240, 240)">
<nav id="mob-nav">
    <div class="nav-panel">
        {{--<ul class="menu-list">--}}
            {{--<li><a class="nav-close main-toggle" style="padding-bottom:25px;"><p></p></a></li>--}}
            {{--<li><p>{!! link_to('/', 'Home') !!}</p></li>--}}
            {{--@if(session('statut') == 'visitor')--}}
                {{-- login --}}
            {{--@else--}}
                {{--@if(session('statut') == 'admin')--}}
                    {{--<li><p>{!! link_to_route('admin', 'Admin') !!}</p></li>--}}
                {{--@elseif(session('statut') == 'redac')--}}
                    {{--<li><p>{!! link_to('blog', trans('front/site.redaction')) !!}</p></li>--}}
                {{--@endif--}}
            {{--@endif--}}
            {{--<li><p>{!! link_to('/shop', 'Shop all') !!}</p></li>--}}
            {{--<li><p>{!! link_to('/shop/clothing', 'T-shirts & Jumpers') !!}</p></li>--}}
            {{--<li><p>{!! link_to('/shop/accessories', 'Accessories & Bags') !!}</p></li>--}}
            {{--<li><p>{!! link_to('/info/about-us', 'About us') !!}</p></li>--}}
            {{--@if(session('statut') == 'user' || session('statut') == 'admin')--}}
                {{--<li><p>{!! link_to('/my-account', 'My account') !!}</p></li>--}}
            {{--@endif--}}
            {{--<li><p>{!! link_to('/cart', 'Basket') !!}</p></li>--}}
            {{--@if(session('statut') != 'visitor')--}}
                {{--<li class="logout-li">--}}
                    {{--<p>{!! link_to('/logout', trans('front/site.logout'), ['class' => "logout"]) !!}</p>--}}
                    {{--{!! Form::open(['url' => '/logout', 'class' => 'logout-form']) !!}{!! Form::close() !!}--}}
                {{--</li>--}}
            {{--@endif--}}
        {{--</ul>--}}
    </div>
</nav>
{{--<div class="container">--}}
<header>
    <div class="menu-primary">
        <a id="nav-btn" class="main-toggle"></a>
    </div>
    <div class="menu-secondary">
        <a href="/cart" style="position:absolute;top:0;right:0;">
            {{--<img src="/img/shop/basketicon.png" alt="Muzzini" border="0" style="height: 40px;">--}}
        </a>
    </div>
    <div class="menu-logo">
        <a href="/">
            {{--<img src="/img/muzzinilogo.png" alt="Muzzini" style="width: 100px;">--}}
        </a>
    </div>

    <nav class="navbar">
        <div class="brand" style="float: left;">
            <a href="/" style="position: absolute;top:-18px;">
                {{--<img src="/img/muzzinilogo.png" alt="Muzzini" style="width: 100px;">--}}
            </a>
            <a href="/cart" style="position:absolute;top:-18px;right:0;">
                {{--<img src="/img/shop/basketicon.png" alt="Muzzini" border="0" style="height: 40px;">--}}
            </a>
        </div>
        <div class="container">
            <div class="collapse navbar-collapse">
                {{--<ul class="nav navbar-nav">--}}
                    {{--<li {!! classActivePath('/') !!}>--}}
                        {{--{!! link_to('/', 'Home') !!}--}}
                    {{--</li>--}}
                    {{--<li class="shop-dropdown">--}}
                        {{--<a href="#" role="button" data-toggle="dropdown">Shop <span class="caret"></span></a>--}}
                        {{--<ul class="dropdown-menu sub-menu">--}}
                            {{--<li {!! classActivePath('shop') !!}>--}}
                                {{--{!! link_to('/shop', 'Shop All') !!}--}}
                            {{--</li>--}}
                            {{--<li role="separator" class="divider"></li>--}}
                            {{--<li {!! classActivePath('shop/clothing') !!}>--}}
                                {{--{!! link_to('/shop/clothing', 'T-shirts & Jumpers') !!}--}}
                            {{--</li>--}}
                            {{--<li role="separator" class="divider"></li>--}}
                            {{--<li {!! classActivePath('shop/accessories') !!}>--}}
                                {{--{!! link_to('/shop/accessories', 'Accessories & Bags') !!}--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li {!! classActivePath('info/about-us') !!}>--}}
                        {{--{!! link_to('/info/about-us', 'About us') !!}--}}
                    {{--</li>--}}
                    {{--@if(session('statut') == 'visitor' || session('statut') == 'user')--}}
                        {{--<li {!! classActivePath('contact/create') !!}>--}}
                            {{--{!! link_to('contact/create', trans('front/site.contact')) !!}--}}
                        {{--</li>--}}
                    {{--@endif--}}
                    {{--@if(session('statut') == 'user' || session('statut') == 'admin')--}}
                        {{--<li {!! classActivePath('my-account') !!}>--}}
                            {{--{!! link_to('/my-account', 'My account') !!}--}}
                        {{--</li>--}}
                    {{--@endif--}}
                {{--</ul>--}}
            </div>
        </div>
    </nav>
    @yield('header')
</header>
{{--</div>--}}

{{--<main class="container">--}}
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

        <div>
            {{--<ul class="footer-middle">--}}
                {{--<li>{!! link_to('/shop/clothing', 'T-Shirts') !!}</li>--}}
                {{--<li>{!! link_to('/shop/clothing', 'Hoodies &amp; Sweatshirts') !!}</li>--}}
                {{--<li>{!! link_to('/shop/clothing', 'Jackets &amp; Jeans') !!}</li>--}}
                {{--<li>{!! link_to('/shop/accessories', 'Hats &amp; Bags') !!}</li>--}}
            {{--</ul>--}}
            {{--<hr>--}}
            {{--<span>We accept the following</span>--}}
            {{--<br>--}}
            {{--<img style="width: 150px;" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png" alt="Buy now with PayPal">--}}
            {{--<br>--}}
            {{--<span>Copyright &copy; 2017 Muzzini. All images and rights reserved. {!! link_to('/info/privacy-policy', 'Privacy policy') !!}</span>--}}
        </div>
    </div>

    @yield('footer')
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    $(function() {
        $('.logout').click(function(e) {
            e.preventDefault();

            $('#logout-form').submit();
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>

@yield('scripts')

</body>
</html>