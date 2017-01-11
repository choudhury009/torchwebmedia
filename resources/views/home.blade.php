@extends('template')

@section('main')
    <div class="col-lg-12" style="background-color: rgb(240, 240, 240)">
        {{--<div class="height-full">--}}
            {{--<div class="row no-margin-left-right site-logo-container">--}}
                {{--<img class="site-logo" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/logowhite3.png">--}}
            {{--</div>--}}

        <div class="row row-margin-left-and-right-fix limit-width">
            <div class="col-xs-12 col-md-4">
                <label class="landing-text main-text" style="color: black">Whatever you want, we can make!</label>
                <p class="landing-text">
                </p>
            </div>
            <div class="col-xs-12 col-md-8">
                <div id="slideshow" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    {{--<ol class="carousel-indicators">--}}
                        {{--<li data-target="#slideshow" data-slide-to="0" class="active"></li>--}}
                        {{--<li data-target="#slideshow" data-slide-to="1"></li>--}}
                        {{--<li data-target="#slideshow" data-slide-to="2"></li>--}}
                        {{--<li data-target="#slideshow" data-slide-to="3"></li>--}}
                    {{--</ol>--}}

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="/img/slideshow/slideshow1.jpg" alt="Muzzini font">
                        </div>

                        <div class="item">
                            <img src="/img/slideshow/slideshow2.jpg" alt="Muzzini font">
                        </div>

                        <div class="item">
                            <img src="/img/slideshow/slideshow3.jpg" alt="Muzzini font">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#slideshow" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#slideshow" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="place-content-bottom">

            <div class="col-xs-8 text-center menu-container">
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    {{--<div class="container cf">--}}
        {{--<!-- Course 1 -->--}}
        {{--<div class="animation-element bounce-up cf">--}}
            {{--<div class="subject development">--}}
                {{--<div class="category-color"></div>--}}
                {{--<div class="icon"><i class="fa fa-cogs"></i></div>--}}
                {{--<div class="header cf">--}}
                    {{--<h4 class="date"><i class="fa fa-calendar-o"></i> April, 2015</h4>--}}
                    {{--<h4 class="category"><i class="fa fa-folder-o"></i> Development</h4>--}}
                {{--</div>--}}
                {{--<img class="img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/chemistryicon.png">--}}
                {{--<h3 class="title">We build stunning websites!</h3>--}}
                {{--<div class="content">An introductory class on C++. This course will outline the basic elements required to understand development...</div>--}}
                {{--<div class="enrole">Enrole</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="animation-element bounce-up cf">--}}
            {{--<div class="subject design">--}}
                {{--<div class="category-color"></div>--}}
                {{--<div class="icon"><i class="fa fa-cogs"></i></div>--}}
                {{--<div class="header cf">--}}
                    {{--<h4 class="date"><i class="fa fa-calendar-o"></i> April, 2015</h4>--}}
                    {{--<h4 class="category"><i class="fa fa-folder-o"></i> Development</h4>--}}
                {{--</div>--}}
                {{--<img class="img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/websiteicon.png">--}}
                {{--<h3 class="title">We build stunning websites!</h3>--}}
                {{--<div class="content">An introductory class on C++. This course will outline the basic elements required to understand development...</div>--}}
                {{--<div class="enrole">Enrole</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="col-lg-12" style="">
        <h2>
            Course and Subjects <i class="fa fa-comment"></i></h2>
        <p>Here are our latest subjects that we are currently offering</p>
        <p>We supply a wide range of topics, including development, design, photography and everything in-between</p>
        <div class="col-lg-1 service-item">
        </div>
        <div class="col-lg-10 service-item text-center cf">
            <!-- Course 1 -->
            <div class="animation-element bounce-up cf">
                <div class="subject development">
                    <div class="category-color"></div>
                    <div class="icon"><i class="fa fa-cogs"></i></div>
                    <div class="header cf">
                        <h4 class="date"><i class="fa fa-calendar-o"></i> April, 2015</h4>
                        <h4 class="category"><i class="fa fa-folder-o"></i> Development</h4>
                    </div>
                    <img style="float: left" width="40%" class="service-image img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/chemistryicon.png">
                    <br>
                    <h3 class="title">We build stunning websites!</h3>
                    <div class="content">An introductory class on C++. This course will outline the basic elements required to understand development...</div>
                    {{--<div class="enrole">Enrole</div>--}}
                </div>
            </div>
            <div class="animation-element bounce-up cf">
                <div class="subject design">
                    <div class="category-color"></div>
                    <div class="icon"><i class="fa fa-cogs"></i></div>
                    <div class="header cf">
                        <h4 class="date"><i class="fa fa-calendar-o"></i> April, 2015</h4>
                        <h4 class="category"><i class="fa fa-folder-o"></i> Development</h4>
                    </div>
                    <img style="float: left" width="40%" class="service-image img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/websiteicon.png">
                    <br>
                    <h3 class="title">We build stunning websites!</h3>
                    <div class="content">An introductory class on C++. This course will outline the basic elements required to understand development...</div>
                    {{--<div class="enrole">Enrole</div>--}}
                </div>
            </div>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
    <div class="col-lg-12">
        <div class="row row-margin-left-and-right-fix limit-width selected-nav-item service-section" data-bind="visible: serviceState() === true">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 service-item">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 service-item">
                    <div class="service-image-container">
                        <img class="img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/cloudicon.png">
                    </div>
                    <div class="service-text-container">
                        <p class="service-title">
                            We handle all of your hosting needs
                        </p>
                        <p class="font-size-generic color-hlsa">
                            We make sure that your website is fast, responsive and easy to navigate. In order to help with this, we will set you up with a hosting provider to ensure all of the above.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 service-item">
                    <div class="service-image-container">
                        <img class="img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/maintenanceicon.png">
                    </div>
                    <div class="service-text-container">
                        <p class="service-title">
                            We answer all of your needs
                        </p>
                        <p class="font-size-generic color-hlsa">
                            We dedicate a team to handle all of your maintenance queries all year round to ensure that your website is always up to date with your latest content.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 text-center margin-bottom-40 address-text">
                    <p>m: 07542227208</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {

            var $animation_elements = $('.animation-element');
            var $window = $(window);

            function check_if_in_view() {
            var window_height = $window.height();
            var window_top_position = $window.scrollTop();
            var window_bottom_position = (window_top_position + window_height);

            $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
            $element.addClass('in-view');
            } else {
            $element.removeClass('in-view');
            }
            });
            }

            $window.on('scroll resize', check_if_in_view);
            $window.trigger('scroll');
        });
    </script>


@endsection
