@extends('frontend.frontend-master')

@section('content')
    <header>

        @foreach($logos as $logo)
        <div id="st-logo">
            <a href="#0">
                <img src="{!! asset('logo-images/'.$logo->logo_upload) !!}" style="margin-top: 10px;" height="100" width="200" alt="Logo"/>
            </a>
        </div>
        @endforeach
    </header>

    <div id="st-nav">
        <a href="#0" class="st-nav-trigger">
            Menu<span></span>
        </a>

        <nav id="st-main-nav">
            <ul>
                <li>
                    <a class="page-scroll hvr-underline-from-center" href="#page-top" style="font-size: 15px;">Home</a>
                </li>
                <li>
                    <a class="page-scroll hvr-underline-from-center" href="#our-work" style="font-size: 15px;">Our Work</a>
                </li>
                <li>
                    <a class="page-scroll hvr-underline-from-center" href="#about" style="font-size: 15px;">About Us</a>
                </li>
                <li>
                    <a class="page-scroll hvr-underline-from-center" href="#services" style="font-size: 15px;">Services</a>
                </li>
                <li>
                    <a class="page-scroll hvr-underline-from-center" href="#portfolio" style="font-size: 15px;">Portfolio</a>
                </li>
                <li>
                    <a class="page-scroll hvr-underline-from-center" href="#skills" style="font-size: 15px;">Our Skills</a>
                </li>
                <li>
                    <a class="page-scroll hvr-underline-from-center" href="#team" style="font-size: 15px;">Our Team</a>
                </li>
                <li>
                    <a class="page-scroll hvr-underline-from-center" href="#contact" style="font-size: 15px;">Contact Us</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /#st-nav -->

    <!-- Hero Section
    ================================================== -->
    <section id="hero" class="hero-section-video-dark">
        <div class="video-overlay"></div>
        <!-- /.video-overlay -->
        <div class="hero-video">
            <video autoplay loop poster="{!! asset('/frontend/') !!}/assets/video/particle-video-dark.jpg" id="bgvid" muted playsinline>
                <source src="{!! asset('/frontend/') !!}/assets/video/particle-video-dark.mp4" type="video/mp4">
                <source src="{!! asset('/frontend/') !!}/assets/video/particle-video-dark.webm" type="video/webm">
            </video>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div id="particles-js"></div>

                    <div class="headlines-wrapper">
                    <span class="skilltechtypetext">
                        <span class="typed-cursor">|</span>
                    </span>
                    </div>
                    <!-- /.headlines-wrapper -->
                    <h3 class="first-headline">Ultimate Software Solution!</h3>
                    <h3 class="second-headline">Welcome to <span class="primary" style="color: orangered;">Banglaking Software</span> by Banglaking</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- /.hero-section-2 -->
    <!-- Image Section
    ================================================== -->
    <section id="big-image" class="service-item" style="margin-top: 2px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3"></div>
                    <div class="col-md-6" style="margin-top: 120px;">
                        <h1 class="wow fadeInLeft animated" style="color: white;"><span>Coolest</span> HTML Theme yet?</h1>
                        <h4 class="wow fadeInLeft animated" style="color: white;">Start with particle today, why not! Start with particle today, why not!</h4>
                        <button class="btn wow fadeInLeft animated" style="background-color: orangered; width: 150px; height: 50px;">
                            <a href="{!! url('/portfolio') !!}"><b style="color: white;">Get it now</b></a>
                        </button>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.image section -->

    <!-- Our Work Section
    ================================================== -->
    <section id="our-work" class="our-work-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 see-work">
                    <h2 class="wow fadeInLeft animated">See Our Work</h2>
                </div>
                <div class="col-md-12 new-style">
                    <p class="wow fadeInLeft animated">The new Style for 2017 is here. Like it? <a href="#" class="secondary">BUY THEME
                            NOW!</a></p>
                </div>
                <div class="col-md-12 portfolio-images">
                    @foreach($services as $service)
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="portfolio-img first">
                                <img class="img-responsive" src="{!! asset('work-images/'.$service->project_upload) !!}" width="500" height="200" alt="porftofilio thumbnail">
                                <div class="sweep-left image-gradient"></div>
                                <div class="sweep-from-center">
                                    <div class="sweep-layer">
                                        <div class="sweep-content">
                                            <div class="sweep-icon">
                                                <a href="portfolio-item-video-dark.html">
                                                    <i class="fa fa-eye primary-3" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <h3><a href="portfolio-item-video-dark.html">{!! $service->project_title !!}</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="sweep-right image-gradient"></div>
                            </div>
                            <!-- /.portfolio-img -->
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.our-work-section -->

    <!-- About Us Section
    ================================================== -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                @foreach($abouts as $about)
                <div class="col-lg-12">
                    <div class="about-text">
                        <h2 class="wow fadeIn animated"><span>About</span> {!! $about->heading !!}</h2>
                        <p class="wow fadeIn animated">{!! $about->description!!}.</p>
                        <!-- /.about-icons -->

                    </div>
                    <div class="about-images">
                        <div class="mockup image-left">

                        </div>
                        <!-- /.image-left -->

                        <div class="mockup image-center">
                            <img class="wow slideInUp animated" src="{!! asset('/frontend/') !!}/giphy.gif" style="margin-bottom: 20px;" alt="ipad">
                        </div>
                        <!-- /.image-center -->

                        <div class="mockup image-right">

                        </div>
                        <!-- /.image-right -->
                    </div>
                </div>
                @endforeach
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.about-section -->

    <!-- Quote Section
    ================================================== -->
    <section id="quote" class="quote-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 quote-headline">
                    <h4 class="wow fadeIn animated">We are here to <span>make things Better</span></h4>
                </div>
                <div class="col-md-12 quote-bottom">
                    <div class="container">
                        <h3 class="wow fadeIn animated">
                            "Patience, persistence and perspiration make an unbeatable combination for
                            <span class="primary">success</span>."
                        </h3>
                        <p class="wow fadeIn animated">NAPOLEON HILL<span> - Author</span></p>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.quote-section -->

    <!-- Services Section
    ================================================== -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 service-headline">
                    <h2 class="wow fadeIn animated">What We do, We do <span class="primary">Best!</span></h2>
                    <p class="wow fadeIn animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
                        odio. Praesent libero. Sed
                        cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
                        Praesent mauris.</p>
                </div>
                <div class="col-md-12 service-content">
                    <div class="left">
                        <div class="service wow fadeIn animated">
                            <div class="text">
                                <a href="service-item-video-dark.html" class="primary-hover">Website Development</a>
                                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Integer nec odio.</p>
                            </div>
                            <div class="icons">
                                <i class="material-icons primary">devices</i>
                            </div>
                        </div>
                        <div class="service wow fadeIn animated">
                            <div class="text">
                                <a href="service-item-video-dark.html" class="primary-hover">Software Development</a>
                                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Integer nec odio.</p>
                            </div>
                            <div class="icons">
                                <img src="{!! asset('/frontend/') !!}/assets/images/2019-03-31 (2).png" height="50" width="40"/>
                            </div>
                        </div>
                        <div class="service wow fadeIn animated">
                            <div class="text">
                                <a href="service-item-video-dark.html" class="primary-hover">Mobile Application</a>
                                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Integer nec odio.</p>
                            </div>
                            <div class="icons">
                                <img src="{!! asset('/frontend/') !!}/assets/images/2019-03-31.png" height="50" width="30"/>
                            </div>
                        </div>
                    </div>
                    <div class="service-image">
                        <img src="{!! asset('/frontend/') !!}/assets/images/iphone-services.png" alt="iphone">
                    </div>
                    <div class="right">
                        <div class="service-2 wow fadeIn animated">
                            <div class="icons">
                                <img src="{!! asset('/frontend/') !!}/assets/images/2019-03-31 (4).png" height="40" width="40"/>
                            </div>
                            <div class="text">
                                <a href="service-item-video-dark.html" class="primary-hover">Domain & Hosting</a>
                                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Integer nec odio.</p>
                            </div>
                        </div>
                        <div class="service-2 wow fadeIn animated">
                            <div class="icons">
                                <img src="{!! asset('/frontend/') !!}/assets/images/2019-03-31 (5).png" height="40" width="40"/>
                            </div>
                            <div class="text">
                                <a href="service-item-video-dark.html" class="primary-hover">Digital Marketing</a>
                                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Integer nec odio.</p>
                            </div>
                        </div>
                        <div class="service-2 wow fadeIn animated">
                            <div class="icons">
                                <img src="{!! asset('/frontend/') !!}/assets/images/2019-03-31 (3).png" height="40" width="30"/>
                            </div>
                            <div class="text">
                                <a href="service-item-video-dark.html" class="primary-hover">Digital Electronic</a>
                                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Integer nec odio.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /.service-section -->

    <!-- Call To Action Section
    ================================================== -->
    <section id="call-to" class="call-to-section">
        <div class="call-to-layer main-gradient"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="wow fadeIn animated">Like what You see? <span>Get Particle</span> Now!</h3>
                    <p class="wow fadeIn animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
                        odio. Praesent libero. Sed
                        cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
                        Praesent mauris.</p>
                    <button class="btn btn-default wow fadeInRight hvr-sweep-to-right button-gradient animated">Get it Now</button>
                </div>
            </div>
        </div>
    </section>
    <!-- /.call-to-section -->

    <!-- Skills Section
    ================================================== -->
    <section id="skills" class="skills-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="skills-headline">
                        <h4 class="wow fadeIn animated">Let <span>Our Skills</span> speak for Us</h4>
                        <p class="wow fadeIn animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
                            odio. Praesent libero. Sed
                            cursus ante dapibus diam.</p>
                    </div>
                </div>
                <div class="col-md-12 progress-bar-wrapper">
                    <div class="progress-bars">
                        <div class="bar-wrapper">
                            <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">Adobe creative cloud</div>
                            <div class="col-md-8 col-sm-8 col-xs-7">
                                <div class="progressBar skill-bar-gradient wow animated first-bar"></div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-1">
                                <span class="counter">75</span><span>%</span>
                            </div>
                        </div>
                        <div class="bar-wrapper">
                            <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">WORDPRESS</div>
                            <div class="col-md-8 col-sm-8 col-xs-7">
                                <div class="progressBar skill-bar-gradient wow animated second-bar"></div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-1">
                                <span class="counter">80</span><span>%</span>
                            </div>
                        </div>
                        <div class="bar-wrapper">
                            <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">Laravel</div>
                            <div class="col-md-8 col-sm-8 col-xs-7">
                                <div class="progressBar skill-bar-gradient wow animated third-bar"></div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-1">
                                <span class="counter">50</span><span>%</span>
                            </div>
                        </div>
                        <div class="bar-wrapper">
                            <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">GRAPHIC DESIGN</div>
                            <div class="col-md-8 col-sm-8 col-xs-7">
                                <div class="progressBar skill-bar-gradient wow animated fourth-bar"></div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-1">
                                <span class="counter">70</span><span>%</span>
                            </div>
                        </div>
                        <div class="bar-wrapper">
                            <div class="col-md-3 col-sm-3 col-xs-4 wow fadeIn animated">HTML / CSS / JAVASCRIPT</div>
                            <div class="col-md-8 col-sm-8 col-xs-7">
                                <div class="progressBar skill-bar-gradient wow animated fifth-bar"></div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-1">
                                <span class="counter">59</span><span>%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.skills-section -->
    {{--Team Section--}}
    {{--==================================--}}
    <section class="team" id="team">
        <div class="container">
            <div class="row">
                @foreach($all_member as $member)
                    <div class="col-lg-3 col-md-6" style="margin-top: 20px; margin-bottom: 20px;">
                        <div class="team_box"> <img class="img-fluid team_member" src="{!! asset('team-images/'.$member->team_photo) !!}" alt="">
                            <h2 style="color: #ffffff;">{!! $member->name !!}</h2>
                            <h4 style="color: #ff5500; font-weight: bold;">{!! $member->designation !!}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{--End Team Section--}}

    <!-- Contact Section
    ================================================== -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-headline">
                        <h3 class="wow fadeIn animated">Let's <span>Connect</span></h3>
                    </div>
                    <div class="contact-content">
                        @foreach($contact_us as $contact)
                            <div class="contact-info">
                                <p class="contact-header">Our office <span>info</span></p>
                                <div class="info-line">
                                    <div class="info-icon wow fadeIn animated">
                                        <i class="fa fa-envelope-o primary" aria-hidden="true"></i>
                                    </div>
                                    <div class="info-text wow fadeIn animated">
                                        <p>{!! $contact->email !!}</p>
                                    </div>
                                </div>
                                <div class="info-line">
                                    <div class="info-icon wow fadeIn animated">
                                        <i class="fa fa-phone primary" aria-hidden="true"></i>
                                    </div>
                                    <div class="info-text wow fadeIn animated">
                                        <p>{!! $contact->phone !!}</p>
                                    </div>
                                </div>

                                <div class="info-line">
                                    <div class="info-icon wow fadeIn animated">
                                        <i class="fa fa-address-card-o primary" aria-hidden="true"></i>
                                    </div>
                                    <div class="info-text wow fadeIn animated">
                                        <p>{!! $contact->street !!}</p>
                                    </div>
                                </div>

                                <div class="info-line">
                                    <div class="info-icon wow fadeIn animated">
                                        <i class="fa fa-map-marker primary" aria-hidden="true"></i>
                                    </div>
                                    <div class="info-text wow fadeIn animated">
                                        <p>{!! $contact->location !!}</p>
                                    </div>
                                </div>

                                <div class="bottom-info">
                                    <h4 class="wow fadeIn animated"><span>Connect</span> with us</h4>

                                    <ul class="list-inline social-icons wow fadeIn animated">
                                        <li>
                                            <a href="#" class="primary-2-back primary-back-hover">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="primary-2-back primary-back-hover">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="primary-2-back primary-back-hover">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="primary-2-back primary-back-hover">
                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                        <div class="contact-form">
                            <h4 class="wow fadeIn animated">Send us a <span>Message</span></h4>

                            <form method="post">
                                <div class="form-group wow fadeIn animated">
                                    <label for="name">Name: </label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                                <!-- /.form-group -->

                                <div class="form-group wow fadeIn animated">
                                    <label for="email">Email: </label>
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>
                                <!-- /.form-group -->


                                <div class="form-group wow fadeIn animated">
                                    <label for="message">Message: </label>
                                    <textarea id="message" name="message" class="form-control" rows="4"></textarea>
                                </div>
                                <!-- /.form-group -->
                                <button class="btn btn-default wow fadeIn primary-back-hover primary-hover-border animated" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.contact-section -->
    <footer>
        <p>All Right Reserved © 2017 -<a href="http://www.skilltechwebdesign.com/" class="primary-hover"> Banglaking</a></p>
    </footer>
    <!-- Footer

    ================================================== -->


    <!-- Style Switcher -->
{{--    <div class="style-switcher" id="styler">--}}
{{--        <div class="color-chooser">--}}
{{--            <div class="style-heading">--}}
{{--                <p>Choose Your Colors</p>--}}
{{--            </div>--}}
{{--            <!-- /.style-heading -->--}}

{{--            <ul class="colors-list">--}}
{{--                <li>--}}
{{--                    <div class="color-picker">--}}
{{--                        <p>Primary Color</p>--}}
{{--                        <div id="cp1" class="input-group colorpicker-component">--}}
{{--                            <input type="text" value="#9600f4" class="form-control" />--}}
{{--                            <span class="input-group-addon"><i></i></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /.color-picker -->--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <div class="color-picker">--}}
{{--                        <p>Primary color 2</p>--}}
{{--                        <div id="cp2" class="input-group colorpicker-component">--}}
{{--                            <input type="text" value="#7100B7" class="form-control" />--}}
{{--                            <span class="input-group-addon"><i></i></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /.color-picker -->--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <div class="color-picker">--}}
{{--                        <p>Primary Color 3</p>--}}
{{--                        <div id="cp3" class="input-group colorpicker-component">--}}
{{--                            <input type="text" value="#B649FF" class="form-control" />--}}
{{--                            <span class="input-group-addon"><i></i></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /.color-picker -->--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <div class="color-picker">--}}
{{--                        <p>Primary Color 4</p>--}}
{{--                        <div id="cp4" class="input-group colorpicker-component">--}}
{{--                            <input type="text" value="#D42BFF" class="form-control" />--}}
{{--                            <span class="input-group-addon"><i></i></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /.color-picker -->--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <div class="color-picker">--}}
{{--                        <p>Secondary color</p>--}}
{{--                        <div id="cp5" class="input-group colorpicker-component">--}}
{{--                            <input type="text" value="#00F2FF" class="form-control" />--}}
{{--                            <span class="input-group-addon"><i></i></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /.color-picker -->--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <div class="color-picker">--}}
{{--                        <p>Secondary color 2</p>--}}
{{--                        <div id="cp6" class="input-group colorpicker-component">--}}
{{--                            <input type="text" value="#00BBFF" class="form-control" />--}}
{{--                            <span class="input-group-addon"><i></i></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /.color-picker -->--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <!-- Button trigger modal -->--}}
{{--                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#style-modal">--}}
{{--                        Get CSS--}}
{{--                    </button>--}}
{{--                    <a href="#" class="btn btn-default">Buy Now</a>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--        </div>--}}
{{--        <!-- /.styles -->--}}
{{--        <div class="gear" id="gear-click">--}}
{{--            <i class="fa fa-cog fa-spin fa-fw slow-spin"></i>--}}
{{--        </div>--}}
{{--        <!-- /.gear -->--}}
{{--    </div>--}}
    <!-- /.style-switcher -->



    <!-- Modal -->
{{--    <div class="modal fade" id="style-modal" tabindex="-1" role="dialog" aria-labelledby="style-modal-label">--}}
{{--        <div class="modal-dialog modal-lg" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
{{--                    <h4 class="modal-title" id="style-modal-label">Your Colors CSS</h4>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                <pre>--}}
{{--                    <code id="cssStyles">--}}

{{--                    </code>--}}
{{--                </pre>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-default" id="downloadLink">Download CSS</button>--}}
{{--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    @endsection