@extends('frontend.portfolio.portfolio-master')

@section('title')
    Product Details
@endsection

@section('content')

    <section id="big-image" class="service-item" style="margin-top: 2px; height: auto;">
        <header>
            @foreach($logos as $logo)
                <div id="st-logo">
                    <a href="{!! url('/') !!}">
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
                        <a class="page-scroll hvr-underline-from-center" href="{!! url('/') !!}" style="font-size: 15px;">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="{!! url('/#our-work') !!}" style="font-size: 15px;">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="{!! url('/#about') !!}" style="font-size: 15px;">About Us</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="{!! url('/#services') !!}" style="font-size: 15px;">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="{!! url('/demo') !!}" style="font-size: 15px;">Demo</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="{!! url('/#skills') !!}" style="font-size: 15px;">Our Skills</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="{!! url('/#team') !!}" style="font-size: 15px;">Our Team</a>
                    </li>
                    <li>
                        <a class="page-scroll hvr-underline-from-center" href="{!! url('/#contact') !!}" style="font-size: 15px;">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
        <br/>
        <br/>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12" style="margin-top: 50px;">
                        <h1 class="wow fadeInLeft animated text-center" style="color: white;"><span>{!! $details->product_name !!}</span></h1>
                    </div>
                </div>
                <!-- /.col-md-12 -->
            </div>
            <br/>
           <div class="container" style="border: 0px solid #ffffff;">
               <div class="row">
                   <div class="col-md-12">
                       <div class="col-md-2"></div>
                       <div class="col-md-8">
                           <img src="{!! asset('product-images/'.$details->category_img) !!}" width="100%" alt="product"/>
                           <div>
                               <a href="#" style="border-radius: 8px; background-color: #ff5500; color: #ffffff; font-weight: bold; font-size: 18px; margin-top: 5px;" class="btn btn-block">Live Demo</a>
                           </div>

                           <div style="background-color: gainsboro; border-radius: 8px 8px 0px 0px;">
                               <p style="color: black; text-align: justify; line-height: 22px; margin-left: 10px; margin-top: 5px; padding-top: 10px;">{!! $details->details !!}</p>
                           </div>
                       </div>
                       <div class="col-md-2"></div>
                   </div>
               </div>
           </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.image section -->

    <!-- Our Work Section
    ================================================== -->
    <!-- Contact Section
    ================================================== -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-headline">
                        <h3 class="wow fadeIn animated">Let's <span>Connect</span></h3>
                    </div>
                    <div class="contact-content" >
                        <div class="contact-info" style="height: auto;">
                            <p class="contact-header">Our office <span>info</span></p>
                            <div class="info-line">
                                <div class="info-icon wow fadeIn animated">
                                    <i class="fa fa-envelope-o primary" aria-hidden="true"></i>
                                </div>
                                <div class="info-text wow fadeIn animated">

                                </div>
                            </div>
                            <div class="info-line">
                                <div class="info-icon wow fadeIn animated">
                                    <i class="fa fa-phone primary" aria-hidden="true"></i>
                                </div>
                                <div class="info-text wow fadeIn animated">

                                </div>
                            </div>
                            <div class="info-line">
                                <div class="info-icon wow fadeIn animated">
                                    <i class="fa fa-phone primary" aria-hidden="true"></i>
                                </div>
                                <div class="info-text wow fadeIn animated">

                                </div>
                            </div>
                            <div class="info-line">
                                <div class="info-icon wow fadeIn animated">
                                    <i class="fa fa-phone primary" aria-hidden="true"></i>
                                </div>
                                <div class="info-text wow fadeIn animated">

                                </div>
                            </div>
                            <div class="info-line">
                                <div class="info-icon wow fadeIn animated" style="margin-top: 15px;">
                                    <i class="fa fa-address-card-o primary" aria-hidden="true"></i>
                                </div>
                                <div class="info-text wow fadeIn animated">
                                    <p></p>
                                </div>
                            </div>

                            <div class="info-line">
                                <div class="info-icon wow fadeIn animated">
                                    <i class="fa fa-map-marker primary" aria-hidden="true"></i>
                                </div>
                                <div class="info-text wow fadeIn animated">
                                    <p></p>
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
                        <div class="contact-form">
                            <h4 class="wow fadeIn animated">Send us a <span>Message</span></h4>

                            <form action="{!! url('/send-mail') !!}" method="post" id="fornt-mail">
                                @csrf
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
        <p>All Right Reserved © 2017 -<a href="http://www.skilltechwebdesign.com/" class="primary-hover"> Banglakings Software ltd</a></p>
    </footer>
    <!-- Footer
@endsection