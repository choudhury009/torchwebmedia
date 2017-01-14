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
                            <div class="image" style="background-image:url(/img/slideshow/salford.jpg);">
                                <img src="/img/slideshow/salford.jpg" alt="Creators" />
                            </div>
                            <div class="slider_content_outer">
                                <div class="slider_content center skrollable skrollable-between"
                                     style="width: 98%; left: 1%;opacity: 1;"
                                     data-start="width:98%; opacity:1; left:1%; top:38%;" data-300="opacity: 0; left:1%; top:28%;">
                                    <div class="text">
                                        <h2 style="color: #fff;line-height: 60px;text-shadow: none;">
                                            <span style="letter-spacing: 17px;font-weight: 500;">THE WEBSITE LADS</span>
                                        </h2>
                                        <p style="color: #fff;text-shadow: none;">
                                        </p>
                                        {{--<a class="qbutton green" href="/book-a-consultation/">START YOUR WEBSITE JOURNEY</a>--}}
                                        {{--<a class="qbutton white" style="border-color:#fff;color:#fff;" href="/our-creations/">SEE OUR CREATIONS</a>--}}
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
                     style="background-color:#ffffff; padding-top:95px; padding-bottom:60px; text-align:center;">
                    <div class=" section_inner clearfix">
                        <div class="section_inner_margin clearfix">
                            <div class="wpb_column vc_column_container col-sm-3">
                                <div class="q_icon_with_title medium circle center">
                                    <div class="icon_holder" style="margin: 0 0 28px 0;"></div>
                                    <div class="icon_text_holder" style="">
                                        <div class="icon_text_inner" style="">
                                            <h3 class="icon_title" style="">WHAT WE DO</h3>
                                            <p>
                                                JWL offer a cost effective solution for companies and individuals looking for the best in professional website design and customer interaction.
                                                Our aim is to provide the very best websites that are professionally designed and visually striking.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=
                                 "wpb_column vc_column_container col-sm-3">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="q_icon_with_title medium circle center">
                                            <div class="icon_holder" style="margin: 0 0 28px 0;"></div>
                                            <div class="icon_text_holder" style="">
                                                <div class="icon_text_inner" style="">
                                                    <h3 class="icon_title" style="">Professional website design</h3>
                                                    <p style="">
                                                        Cost effective web design and hosting services delivered with ease.
                                                        Our websites are designed to look and work beautifully by our creative technical developers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container col-sm-3">
                                <div class="q_icon_with_title medium circle center">
                                    <div class="icon_holder" style="margin: 0 0 28px 0;"></div>
                                    <div class="icon_text_holder" style="">
                                        <div class="icon_text_inner" style="">
                                            <h3 class="icon_title" style="">OUR CREATIONS</h3>
                                            <p style="">
                                                We at JWL can help you maximise the benefits of an online presence by ensuring that your website meets every expectation.
                                                From mini projects to large e-commerce websites. Here is one of our favourite!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <a href="http://muzzini.co.uk" class="qbutton small center" style="">Muzzini.co.uk</a>
                                <div class="separator transparent center" style="margin-top:37px;margin-bottom:0px;"></div>
                            </div>
                            <div class="wpb_column vc_column_container col-sm-3">
                                <div class="q_icon_with_title medium circle center">
                                    <div class="icon_holder" style="margin: 0 0 28px 0;"></div>
                                    <div class="icon_text_holder">
                                        <div class="icon_text_inner">
                                            <h3 class="icon_title">Contact us for a free quote!</h3>
                                            <p>
                                                We have the dedication and knowledge to ensure that our clients receive only the best service and end result.
                                                With over 10 years experience designing websites for all different sized projects.
                                            </p>
                                        </div>
                                    </div>
                                </div><a href="/contact-us" class="qbutton small center">Free Quote</a>
                                <div class="separator transparent center" style="margin-top:37px;margin-bottom:0px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_row section vc_row-fluid" style=" padding-top:52px; text-align:left;">
                    <div class="clearfix">
                        <div class="wpb_column vc_column_container col-sm-12">
                            <div class="wpb_text_column wpb_content_element">
                                <div class="wpb_wrapper">
                                    <h2 style="text-align: center;">OUR RECENT CREATIONS</h2>
                                    <p style="text-align: center;">slideshow of muzzini</p>
                                </div>
                            </div>
                            {{--<div class="separator small center" style="margin-top:7px;margin-bottom:45px;"></div>--}}
                            <div class="wpb_gallery wpb_content_element clearfix">
                                <div class="wpb_wrapper">
                                    <div class="wpb_gallery_slides wpb_image_grid" data-interval="3">
                                        <div class="gallery_holder">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_row section vc_row-fluid grid_section"
                     style=" padding-top:75px; text-align:left;">
                    <div class=" section_inner clearfix">
                        <div class="section_inner_margin clearfix">
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="separator transparent center"
                                                     style="margin-top:10px;margin-bottom:0px;"></div>
                                                <div class="wpb_text_column wpb_content_element">
                                                    <div class="wpb_wrapper">
                                                        <h2 style="text-align: center;">WHO WE ARE</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <h4 style="text-align: center;">
                                                        Are you looking for a personal or business
                                                        website that is attractive and affordable?
                                                    </h4>
                                                    <p style="text-align: center;">
                                                        With our wealth of experience and knowledge,
                                                        we will make your website stunning.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="wpb_single_image wpb_content_element vc_align_center element_from_right element_from_right_on">
                                    <div style="text-align: center;transition-delay:0.3s">
                                        <div class="wpb_wrapper">
                                            <img align="center" width="429" height="409" src="/img/slideshow/background.jpg"
                                                 class=" vc_box_border_grey attachment-full" alt="Websites"
                                                 srcset="/img/slideshow/background.jpg 429w, /img/slideshow/background.jpg 300w"
                                                 sizes="(max-width: 429px) 100vw, 429px"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="separator transparent center" style="margin-top:60px;margin-bottom:7px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wpb_row section vc_row-fluid grid_section"
                     style="background-color:#ffffff; padding-top:87px; padding-bottom:0px; text-align:left;">
                    <div class=" section_inner clearfix">
                        <div class="section_inner_margin clearfix">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="wpb_text_column wpb_content_element">
                                    <div class="wpb_wrapper">
                                        <h2 style="text-align: center;">WHAT WE DO</h2>
                                    </div>
                                </div>
                                <div class="wpb_text_column wpb_content_element">
                                    <div class="wpb_wrapper">
                                        <h4 style="text-align: center;">We offer high-quality design and website building</h4>
                                        <h4 style="text-align: center;">for start ups and small businesses all around the world.</h4>
                                    </div>
                                </div>
                                <div class="separator transparent center" style="margin-top:35px;margin-bottom:17px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_row section vc_row-fluid grid_section" style="padding-bottom: 20px; background-color:#ffffff; text-align:left;">
                    <div class="section_inner clearfix">
                        <div class="section_inner_margin clearfix">
                            <div class="col-sm-4">
                                <div class="wpb_wrapper">
                                    <h5>Website Maintenance!</h5>
                                </div>
                                <div class="wpb_wrapper">
                                    <p>
                                        A dedicated team will handle all of your maintenance
                                        requirements to ensure that your website is always up to date.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="wpb_wrapper">
                                    <h5>Full Branding</h5>
                                </div>
                                <div class="wpb_wrapper">
                                    <p>
                                        <span style="line-height: 1.5em;">
                                            As we’re specialists working with extraordinary start ups and small businesses
                                            alike, we can help you with branding which sticks with your new customers.
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="wpb_wrapper">
                                    <h5>E-Commerce Websites</h5>
                                </div>
                                <div class="wpb_wrapper">
                                    <p>
                                        We’re specialists in Laravel which is one of the leading platforms for e-commerce
                                        website in the world, allowing you to build your commerce empire online.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_row section vc_row-fluid grid_section"
                     style="background-color:#f6f6f6; padding-top:87px; padding-bottom:88px; text-align:left;">
                    <div class=" section_inner clearfix">
                        <div class="section_inner_margin clearfix">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="wpb_text_column wpb_content_element">
                                    <div class="wpb_wrapper">
                                        {{--<h2 style="text-align: center;">Don’t just take our word for it</h2>--}}
                                        <h2 style="text-align: center;">Get your quote</h2>
                                    </div>
                                </div>
                                <div class="wpb_text_column wpb_content_element">
                                    <div class="wpb_wrapper" style="text-align: center">
                                        <p>m: 07542227208</p>
                                        <p>e: jtapps009@gmail.com</p>
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