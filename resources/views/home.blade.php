@extends('template')

@section('main')
    <div class="home-container">
        <div class="height-full">
            <div class="row no-margin-left-right site-logo-container">
                {{--<img class="site-logo" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/logowhite3.png">--}}
            </div>

            <div class="row row-margin-left-and-right-fix limit-width landing-info-container">
                <div class="col-xs-12 col-md-4">
                    <label class="landing-text main-text">Whatever you want, we can make!<span class="typed-cursor">|</span></label>
                    <p class="landing-text">
                    </p>
                </div>
                <div class="col-xs-12 col-md-8 laptop-container">

                </div>
            </div>
            <div class="place-content-bottom">

                <div class="col-xs-8 text-center menu-container">
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row row-margin-left-and-right-fix limit-width selected-nav-item service-section" data-bind="visible: serviceState() === true">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 service-item">
                    <div class="service-image-container">
                        <img class="img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/chemistryicon.png">
                    </div>
                    <div class="service-text-container">
                        <p class="service-title">
                            We design and build stunning websites and mobile applications
                        </p>
                        <p class="font-size-generic color-hlsa">
                            <span class="block">Based on simplicity, </span> we believe that we can show off what you have to offer in the most effective way possible.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 service-item">
                    <div class="service-image-container">
                        <img class="img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/websiteicon.png">
                    </div>
                    <div class="service-text-container">
                        <p class="service-title">
                            We listen to you
                        </p>
                        <p class="font-size-generic color-hlsa">
                            It is important for us to understand your vision in order to translate that into a website or application that you are proud to show off.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 service-item">
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
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 service-item">
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
@endsection
