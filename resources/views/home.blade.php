@extends('template')

@section('main')
    <div class="col-lg-12" style="">
        <div class="row fix-margin limit-width">
            <div class="col-xs-12 col-md-8">
                <div id="slideshow" class="carousel slide animation-element slide-right" data-ride="carousel">
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
    <div class="fix-margin company-intro">
        <div class="content" style="color:white">
            <p>JWL offer a cost effective solution for companies and individuals looking for the best in professional website design and customer interaction.
            <p>Our aim is to provide the very best websites that are professionally designed and visually striking. We at JWL can help you maximise the benefits of an online presence by ensuring that your website meets every expectation.</p>
            <p>JWL consists of over 10 years of web development experience. We have the dedication and knowledge to ensure that our clients receive only the best service and end result.</p>
        </div>
    </div>
    <div class="col-lg-12" style="">
        <div class="col-lg-1 service-item">
        </div>
        <div class="col-lg-10 service-item text-center cf">
            <div class="animation-element bounce-up cf">
                <div class="subject development">
                    <div class="category-color"></div>
                    <img class="service-image img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/chemistryicon.png">
                    <br>
                    <h3 class="title">Professional website design!</h3>
                    <div class="content">Cost effective web design and hosting services delivered with ease.</div>
                </div>
            </div>
            <div class="animation-element bounce-up cf">
                <div class="subject design">
                    <div class="category-color"></div>
                    <img class="service-image img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/websiteicon.png">
                    <br>
                    <h3 class="title">Expert service and knowledge!</h3>
                    <div class="content">Our websites are designed to look and work beautifully by our creative technical developers.</div>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
    <div class="col-lg-12">
        <div class="col-lg-1 service-item">
        </div>
        <div class="col-lg-10 service-item text-center cf">
            <div class="animation-element bounce-up cf">
                <div class="subject development">
                    <div class="category-color"></div>
                    <img style="float: left" width="40%" class="service-image img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/chemistryicon.png">
                    <br>
                    <h3 class="title">Personal and business websites!</h3>
                    <div class="content">With our wealth of experience and knowledge, we will make your website stunning.</div>
                </div>
            </div>
            <div class="animation-element bounce-up cf">
                <div class="subject design">
                    <div class="category-color"></div>
                    <img class="service-image img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/cloudicon.png">
                    <br>
                    <h3 class="title">UK company based in Greater Manchester!</h3>
                    <div class="content">We have over 10 years experience designing websites for all different sized projects.</div>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
    <div class="col-lg-12">
        <div class="col-lg-1 service-item">
        </div>
        <div class="col-lg-10 service-item text-center cf">
            <div class="animation-element bounce-up cf">
                <div class="subject development">
                    <div class="category-color"></div>
                    <img class="service-image img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/chemistryicon.png">
                    <br>
                    <h3 class="title">Web Hosting!</h3>
                    <div class="content">We make sure that your website is super-fast, responsive and easy to navigate. In order to help with this, we will set you up with a hosting provider.</div>
                </div>
            </div>
            <div class="animation-element bounce-up cf">
                <div class="subject design">
                    <div class="category-color"></div>
                    <img class="service-image img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/cloudicon.png">
                    <br>
                    <h3 class="title">Website Maintenance!</h3>
                    <div class="content">A dedicated team will handle all of your maintenance requirements to ensure that your website is always up to date.</div>
                    {{--<div class="enrole">Enrole</div>--}}
                </div>
            </div>
        </div>
        <div class="col-lg-1">
        </div>

        <div class="col-xs-12 text-center margin-bottom-40 address-text">
            <p>m: 07542227208</p>
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
                        if (!$element.hasClass('slide-right')) {
                            $element.removeClass('in-view');
                        }
                    }
                });
            }

            $window.on('scroll resize', check_if_in_view);
            $window.trigger('scroll');
        });
    </script>


@endsection
