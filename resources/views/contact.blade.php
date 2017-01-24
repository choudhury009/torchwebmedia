@extends('template')

@section('main')
    <div class="content" style="min-height: 35px;">
        <div class="content_inner">
            <div class="q_slider">
                <div class="q_slider_inner">
                    <div id="qode-home-slider-2" class="carousel slide q_auto_start header_not_transparent"
                         data-slide_animation="6000" data-height="702" data-parallax="yes" style="height: 702px;">
                        <div class="qode_slider_preloader" style="height: 702px; display: none;">
                            <div class="ajax_loader_slider">
                                <div class="ajax_loader_1">
                                    <div class="ajax_loader_html"></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-inner skrollable skrollable-between" data-start="transform: translateY(0px);"
                             data-1440="transform: translateY(-500px);" style="transform: translateY(0px); display: block;">
                            <div class="item dark active" style="height: 702px;">
                                <div class="image" style="background-image:url(/img/background/beach.jpg);">
                                    {{--<img src="/img/slideshow/earth.jpg" alt="Creators" />--}}
                                </div>
                                <div class="slider_content_outer">
                                    <div class="slider_content center skrollable skrollable-between"
                                         style="width: 98%; left: 1%; top: 10%; opacity: 1;"
                                         data-start="width:98%; opacity:1; left:1%; top:38%;" data-300="opacity: 0; left:1%; top:28%;">
                                        <div class="text">
                                            <h2 style="color: #fff;line-height: 60px;text-shadow: none;">
                                                <span style="letter-spacing: 15px;font-weight: 600;">Contact</span>
                                            </h2>
                                            <p style="color: #fff;text-shadow: none;">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="full_width">
                <div class="full_width_inner">
                    <div class="wpb_row section vc_row-fluid grid_section"
                         style="background-color:#f6f6f6; padding-top:87px; padding-bottom:88px; text-align:left;">
                        <div class=" section_inner clearfix">
                            <div class="section_inner_margin clearfix">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="wpb_text_column wpb_content_element">
                                        <div class="wpb_wrapper">
                                            {{--<h2 style="text-align: center;">Don’t just take our word for it</h2>--}}
                                            <h2 style="text-align: center;">Find us here</h2>
                                        </div>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element">
                                        <div class="wpb_wrapper" style="text-align: center">
                                            {{--<p>m: 07542227208</p>--}}
                                            <p>e: jtapps009@gmail.com</p>
                                            <a href="tel:+44-7542-227-208" class="qbutton small center" style="">Call us now</a>
                                        </div>
                                    </div>
                                    <div class="testimonials_holder clearfix">
                                        <div class="testimonials testimonials_carousel"
                                             data-show-navigation="true"
                                             data-animation-type="fade"
                                             data-animation-speed=""
                                             data-auto-rotate-slides="3">
                                            {{--<p>Muzzini testimonial</p>--}}
                                            {{-- testimonial from muzzini etc --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_bottom"></div>
        </div>
    </div>
@endsection