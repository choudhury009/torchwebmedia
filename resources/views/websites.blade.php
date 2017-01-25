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
                                <div class="image" style="background-image:url(/img/background/boat.jpg);">
                                    {{--<img src="/img/slideshow/earth.jpg" alt="Creators" />--}}
                                </div>
                                <div class="slider_content_outer">
                                    <div class="slider_content center skrollable skrollable-between"
                                         style="width: 98%; left: 1%; top: 10%; opacity: 1;"
                                         data-start="width:98%; opacity:1; left:1%; top:38%;" data-300="opacity: 0; left:1%; top:28%;">
                                        <div class="text">
                                            <h2 style="color: #fff;line-height: 60px;text-shadow: none;">
                                                <span style="letter-spacing: 15px;font-weight: 600;">Portfolio</span>
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
                    <div class="wpb_row section vc_row-fluid" style=" padding-top:52px; text-align:left;">
                        <div class="clearfix">
                            <div class="wpb_column vc_column_container col-sm-12">
                                <div class="wpb_text_column wpb_content_element">
                                    <div class="wpb_wrapper">
                                        <h2 style="text-align: center;">OUR RECENT CREATIONS</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- portfolio start --}}
                    <div class="wpb_gallery wpb_content_element clearfix">
                        <div class="wpb_wrapper">
                            <div class="wpb_gallery_slides wpb_image_grid" data-interval="3">
                                <div class="gallery_holder">
                                    <ul class="gallery_inner v2">
                                        <li class="">
                                            <a href="http://www.ecigfactory.co.uk/">
                                                <img src="img/slideshow/ecigfactory.png"/>
                                            </a>
                                        </li>
                                        <li class="" style="padding:2%;">
                                            <p>
                                                With the growing concern of young deaths in relation to the effects of
                                                smoking, ecig factory was formed by a group of caring, hardworking
                                                individuals who are dedicated in providing aid for others. As the
                                                founders have experienced the transition from being smokers, to now
                                                being expert vaper’s themselves, they fully understand the benefits of
                                                safeguarding their lives from the disastrous effects of smoking.
                                                Recognised for having an abundance of knowledge of the very best
                                                vaping products and excellent choice of taste, the founders seized the
                                                opportunity to offer a one stop shop, to offer products only of the
                                                highest quality.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_gallery wpb_content_element clearfix">
                        <div class="wpb_wrapper">
                            <div class="wpb_gallery_slides wpb_image_grid" data-interval="3">
                                <div class="gallery_holder">
                                    <ul class="gallery_inner v2">
                                        <li class="">
                                            <a href="http://www.muzzini.co.uk/">
                                                <img src="img/slideshow/muzzinicreation.png"/>
                                            </a>
                                        </li>
                                        <li class="" style="padding:2%;">
                                            <p>
                                                The ultimate goal for the Muzzini is to begin production on customised
                                                clothing, bags and other accessories. We believe that each and every
                                                product should have a personal meaning to our customers. So we have
                                                dedicated a section of the business which will be known as Muzzini customs.
                                                Muzzini customs allows you to go wild and create your own designs and
                                                make them come to life. We at Muzzini want to give you the opportunity
                                                to wear your identity and be unique in your own trend. Everything we
                                                offer is quality checked and made to a very high finish.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_gallery wpb_content_element clearfix">
                        <div class="wpb_wrapper">
                            <div class="wpb_gallery_slides wpb_image_grid" data-interval="3">
                                <div class="gallery_holder">
                                    <ul class="gallery_inner v2">
                                        <li class="">
                                            <a href="/">
                                                <img src="img/slideshow/torchwebmedia.png"/>
                                            </a>
                                        </li>
                                        <li class="" style="padding:2%;">
                                            <p>
                                                Torch Web Media offer a cost effective solution for companies and
                                                individuals looking for the best in professional website design and
                                                customer interaction. Our aim is to provide the very best websites that
                                                are professionally designed and visually striking. Cost effective web
                                                design and hosting services delivered with ease. Our websites are
                                                designed to look and work beautifully by our creative technical developers.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- portfolio end --}}
                </div>
            </div>
            <div class="content_bottom"></div>
        </div>
    </div>
@endsection