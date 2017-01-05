@extends('template')

@section('main')
    <div class="home-container">
        <div class="height-full">
            <div class="row no-margin-left-right site-logo-container">
                {{--<img class="site-logo" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/logowhite3.png">--}}
            </div>

            <div class="row row-margin-left-and-right-fix limit-width landing-info-container">
                <div class="col-xs-12 col-md-4">
                    <label class="landing-text main-text">We strongly believe in simplicity.<span class="typed-cursor">|</span></label>
                    <p class="landing-text">
                        Through simplicity we can create websites and apps that are both stunning and effective.
                    </p>
                </div>
                <div class="col-xs-12 col-md-8 laptop-container">
                    <img class="laptop-placement carousel-img-1 hidden-xs hidden-sm" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/screenshot1insideLaptop.png" style="display: block;">
                    <img class="laptop-placement carousel-img-2 hidden-xs hidden-sm" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/screenshot2insideLaptop.png" style="display: none;">
                    <img class="laptop-placement carousel-img-3 hidden-xs hidden-sm" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/screenshot3insideLaptop.png" style="display: none;">
                    <img class="laptop-placement carousel-img-4 hidden-xs hidden-sm" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/screenshot5insideLaptop.png" style="display: block; opacity: 0.00364556;">

                    <img class="mobile-placement carousel-img-1" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/screenshot1insideIphone.png" style="display: block;">
                    <img class="mobile-placement carousel-img-2" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/screenshot2insideIphone.png" style="display: none;">
                    <img class="mobile-placement carousel-img-3" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/screenshot3insideIphone.png" style="display: none;">
                    <img class="mobile-placement carousel-img-4" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/screenshot5insideIphone.png" style="display: block; opacity: 0.00364556;">
                </div>
            </div>
            <div class="place-content-bottom">

                <div class="col-xs-8 text-center menu-container">

                    <div class="col-xs-4 small-device-no-padding-left-right menu-item" data-bind="click: changeState.bind($data,'service')">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 small-device-no-padding-left-right">
                            <i class="btr bt-light-bulb bt-4x" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 small-device-no-padding-left-right">
                            <label class="color-hlsa">Services</label>
                        </div>
                    </div>

                    <div class="col-xs-4 small-device-no-padding-left-right menu-item" data-bind="click: changeState.bind($data,'whoWeAre')">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 small-device-no-padding-left-right">
                            <i class="btr bt-rocket bt-4x" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 small-device-no-padding-left-right">
                            <label class="color-hlsa">Team</label>
                        </div>
                    </div>

                    <div class="col-xs-4 small-device-no-padding-left-right menu-item" data-bind="click: changeState.bind($data,'contact')">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 small-device-no-padding-left-right">
                            <i class="btr bt-edit bt-4x" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 small-device-no-padding-left-right">
                            <label class="color-hlsa">Contact</label>
                        </div>
                    </div>
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
            </div>
        </div>

        <div class="row row-margin-left-and-right-fix limit-width selected-nav-item whoWeAre-section" data-bind="visible: whoWeAreState() === true" style="display: none;">
            <div class="col-xs-12 text-center margin-bottom-40 team-quote">
                <p>
                    Khalid, Aaron, Hardeep and Angel all met during their time at university while studying to become Software Engineers.
                    Having developed their love for designing and developing websites as well as applications over a number of years, which included work at the BBC and Xbox, they decided to create a company to do what they do best.
                    Nazir then joined the force having just completed a Masters in Finance to also do what he does best - identify and understand clients’ needs.
                </p>
                <p> As a team we are dedicated to deliver state of the art design and development practices and technologies.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 who-we-are-container">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 color-hlsa">
                    <label class="block big-label"> Khalid Tayan </label>
                    <label class="block small-label"> Head of Design </label>
                    <img class="img-circle img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/khalidcircle.png">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 color-hlsa">
                    <label class="block big-label"> Aaron Phillps </label>
                    <label class="block small-label"> CTO, Software Engineer </label>
                    <img class="img-circle img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/aaroncircle3.png">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 color-hlsa">
                    <label class="block big-label"> Nazir AlAccad </label>
                    <label class="block small-label"> Account Manager </label>
                    <img class="img-circle img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/nazPhoto.png">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-md-offset-2 md-lg-margin-top color-hlsa">
                    <label class="block big-label"> Hardeep Singh </label>
                    <label class="block small-label"> Software Engineer </label>
                    <img class="img-circle img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/hardeepcircle.png">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 md-lg-margin-top color-hlsa">
                    <label class="block big-label"> Angel Petrov </label>
                    <label class="block small-label"> Software Engineer </label>
                    <img class="img-circle img-responsive" src="https://s3-eu-west-1.amazonaws.com/sixtybidresources/Sixtygrid/angelcircle.png">
                </div>

            </div>
        </div>

        <div class="row row-margin-left-and-right-fix limit-width selected-nav-item contact-section active-nav-item" data-bind="visible: contactState() === true" style="display: none;">
            <div class="col-xs-12 text-center margin-bottom-40 address-text">
                <p>m: 07542227208</p>
                <label class="thank-you-text" data-bind="visible: formSubmitted() === true" style="display: none;">Thank you for contacting us, we will be in touch with you soon</label>
            </div>
            <div class="col-xs-12 col-md-6">
                <p data-bind="css: { error: title.hasError }" class="error">
                    <input id="title" type="text" class="form-control" placeholder="Subject" data-bind="value: title, valueUpdate: &quot;afterkeydown&quot;">
                    <span data-bind="visible: title.hasError, text: title.validationMessage">Please enter the subject</span>
                </p>

                <p data-bind="css: { error: name.hasError }" class="error">
                    <input id="name" type="text" class="form-control" placeholder="Your Name" data-bind="value: name, valueUpdate: &quot;afterkeydown&quot;">
                    <span data-bind="visible: name.hasError, text: name.validationMessage">Please enter your name</span>
                </p>

                <p data-bind="css: { error: email.hasError }" class="error">
                    <input id="email" type="text" class="form-control" placeholder="Email Address" data-bind="value: email, valueUpdate: &quot;afterkeydown&quot;">
                    <span data-bind="visible: email.hasError, text: email.validationMessage">Please enter a valid email</span>
                </p>

                <p data-bind="css: { error: description.hasError }" class="error">
                    <textarea id="description" type="text" class="form-control" placeholder="Message" data-bind="value: description, valueUpdate: &quot;afterkeydown&quot;"></textarea>
                    <span data-bind="visible: description.hasError, text: description.validationMessage">Please enter your feedback</span>
                </p>
                <div class="col-xs-12">
                    <label data-bind="text: hasFormError, visible: hasFormError() !== false">Please ensure that you have filled each section correctly</label>
                </div>
                <div class="rows float-right">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 send-button-holder">
                        <button id="send" type="submit" class="btn btn-default" data-bind="click: send, enable: hasFormError() === false" disabled="">Send</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 map-container">
                <div id="map" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: -212px; top: -229px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -212px; top: -229px;"></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden; width: 452px; height: 400px;"><img src="https://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i33125332&amp;2i21713381&amp;2e1&amp;3u18&amp;4m2&amp;1u452&amp;2u400&amp;5m5&amp;1e0&amp;5sen-GB&amp;6sus&amp;10b1&amp;12b1&amp;token=79790" style="width: 452px; height: 400px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: -212px; top: -229px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i18!2i129395!3i84817!4i256!2m3!1e0!2sm!3i371051063!3m9!2sen-GB!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=13135" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 4; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=53.473421,-2.301873&amp;z=18&amp;t=m&amp;hl=en-GB&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 0px; height: 0px; position: absolute; left: 5px; top: 5px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2017 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 0px; bottom: 0px; width: 12px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer;">Map Data</a><span style="display: none;">Map data ©2017 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2017 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-GB_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px; display: none;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@53.4734206,-2.3018734,18z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="0" controlheight="0" style="margin: 10px; user-select: none; position: absolute; bottom: 0px; right: 0px; display: none;"><div class="gmnoprint" style="display: none; position: absolute;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255);"><div title="Zoom in" style="position: relative;"><div style="overflow: hidden; position: absolute;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230);"></div><div title="Zoom out" style="position: relative;"><div style="overflow: hidden; position: absolute;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px; display: none;"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 0px; height: 0px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; display: none; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show street map" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; font-weight: 500;">Map</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 0px; text-align: left; display: none;"><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show satellite imagery" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-left: 0px;">Satellite</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 0px; text-align: left; display: none;"><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div></div></div>
            </div>
        </div>
    </div>
@endsection
