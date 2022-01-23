@extends('layouts.base')


@section('page-css')


    <link rel="stylesheet" href="assets/icons/fonts/bootstrap-icons.woff">
    <link rel="stylesheet" href="assets/icons/fonts/bootstrap-icons.woff2">


@endsection


@section('content')
    <div id="wrapper">

        <!-- Hero
        ================================================== -->
        <section>
            <div id="hero-section" class="landing-hero" data-stellar-background-ratio="0">
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">

                                <div class="hero-text">
                                    <div class="herolider">
                                        <ul class="caption-slides">

                                            <li class="caption">
                                                <h1>A Legacy of Quality</h1>
                                                <div class="div-line"></div>
                                                <p class="hero">Refined and cultured decorations.</p>
                                            </li>

                                            <li class="caption">
                                                <h1>Vibrant Set Pieces</h1>
                                                <div class="div-line"></div>
                                                <p class="hero">Set an elagant ambience.</p>
                                            </li>

                                            <li class="caption">
                                                <h1>High Quality Quisine</h1>
                                                <div class="div-line"></div>
                                                <p class="hero">Catering by qualified and seasoned chefs</p>
                                            </li>

                                        </ul>
                                    </div> <!-- end herolider -->
                                </div> <!-- end hero-text -->

                                <div class="hero-btn">
                                    <a href="#landing-offer" class="btn btn-clean">Read more</a>
                                </div> <!-- end hero-btn -->

                            </div> <!-- end col-md-6 -->
                        </div> <!-- end row -->
                    </div> <!-- End container -->
                </div> <!-- End hero-content -->
            </div> <!-- End hero-section -->
        </section>
        <!-- End hero section -->

        <!-- Offer
        ================================================== -->
        <section>
            <div id="landing-offer" class="pad-sec">
                <div class="container">

                    <div class="title-section big-title-sec animated out" data-animation="fadeInUp" data-delay="0">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2 class="big-title">Some information about us</h2>
                                <h1 class="big-subtitle">We’re a small decorating &amp; catering business.</h1>
                                <hr>
                                <p class="about-text">We strive to create set pieces that will bring life to your events. Whilst maintaining affordable prices in order to bring the most value to our customers. Bhah blah blah blaaaaaah blah blahhhhh abbk. Bhah blah blah blaaaaaah blah blahhhhh abbk Bhah blah blah blaaaaaah blah blahhhhh abbk Bhah blah blah blaaaaaah blah blahhhhh abbk</p>
                            </div>
                        </div> <!-- End row -->
                    </div>
                </div> <!-- End container -->
            </div> <!-- End landing-offer-section -->
        </section>
        <!-- End offer section -->

        <section>
            <div class="sep-section"></div>
        </section>

        <!-- Features services
        ================================================== -->
        <section>
            <div id="features-section" class="pad-sec">
                <div class="container">
                    <div class="title-section text-center animated out" data-animation="fadeInUp" data-delay="0">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2>What we do?</h2>
                                <hr>
                                <p>We provide catering as well as decorations for events.</p>
                            </div> <!-- edn col-sm-8 -->
                        </div> <!-- End row -->
                    </div> <!-- end title-section -->
                    <div class="row">
                        <div class="col-md-3 without-padding">
                            <div class="left-features-services">
                                <ul class="features-list">
                                    <!-- feature -->
                                    <li>
                                        <div class="left-features-box animated out" data-animation="fadeInLeft" data-delay="0">
                                            <span class="iconbox"><i class="icon-basket"></i></span>
                                            <div class="features-box-content">
                                                <h6>Catering</h6>
                                                <p>We provide high quality dishes to suit every taste.</p>
                                            </div> <!-- end features-box-content -->
                                        </div> <!-- end left-features-box -->
                                    </li>
                                    <!-- feature -->
                                    <li>
                                        <div class="left-features-box animated out" data-animation="fadeInLeft" data-delay="0">
                                            <span class="iconbox"><i class="icon-browser"></i></span>
                                            <div class="features-box-content">
                                                <h6>Weddings</h6>
                                                <p> Bhah blah blah blaaaaaah blah blahhhhh abbk Bhah blah blah blaaaaaah blah blahhhhh abbk.</p>
                                            </div> <!-- end features-box-content -->
                                        </div> <!-- end left-features-box -->
                                    </li>
                                    <!-- feature -->
                                    <li>
                                        <div class="left-features-box animated out" data-animation="fadeInLeft" data-delay="0">
                                            <span class="iconbox"><i class="icon-strategy"></i></span>
                                            <div class="features-box-content">
                                                <h6>Parties</h6>
                                                <p> Bhah blah blah blaaaaaah blah blahhhhh abbk Bhah blah blah blaaaaaah blah blahhhhh abbk Bhah blah blah blaaaaaah blah blahhhhh abbk.</p>
                                            </div> <!-- end features-box-content -->
                                        </div> <!-- end left-features-box -->
                                    </li>
                                    <!-- feature -->
                                    <li>
                                        <div class="left-features-box animated out" data-animation="fadeInLeft" data-delay="0">
                                            <span class="iconbox"><i class="icon-hotairballoon "></i></span>
                                            <div class="features-box-content">
                                                <h6>Company Events</h6>
                                                <p> Bhah blah blah blaaaaaah blah blahhhhh abbk Bhah blah blah blaaaaaah blah blahhhhh abbk.</p>
                                            </div> <!-- end features-box-content -->
                                        </div> <!-- end left-features-box -->
                                    </li>
                                    <!-- feature -->

                                </ul> <!-- end features-list -->
                            </div> <!-- end left-features-service -->
                        </div><!--  end col-md-3 -->

                        <div class="col-md-6">
                            <div class="features-image animated out" data-animation="fadeInUp" data-delay="0">
                                <img src="assets/images/temp/flowers.png" alt="">
                            </div> <!-- end features-image -->
                        </div> <!-- end col-md-6 -->

                        <div class="col-md-3 without-padding">
                            <div class="right-features-services">
                                <ul class="features-list">
                                    <!-- feature -->
                                    <li>
                                        <div class="right-features-box animated out" data-animation="fadeInRight" data-delay="0">
                                            <span class="iconbox"><i class="icon-tools-2"></i></span>
                                            <div class="features-box-content">
                                                <h6>Equipment Rentals</h6>
                                                <p> Bhah blah blah blaaaaaah blah blahhhhh abbk Bhah blah blah blaaaaaah blah blahhhhh abbk</p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- feature -->
                                    <li>
                                        <div class="right-features-box animated out" data-animation="fadeInRight" data-delay="0">
                                            <span class="iconbox"><i class="icon-video"></i></span>
                                            <div class="features-box-content">
                                                <h6>Funerals</h6>
                                                <p> Bhah blah blah blaaaaaah blah blahhhhh abbk Bhah blah blah blaaaaaah blah blahhhhh abbk</p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- feature -->
                                    <li>
                                        <div class="right-features-box animated out" data-animation="fadeInRight" data-delay="0">
                                            <span class="iconbox"><i class="icon-camera"></i></span>
                                            <div class="features-box-content">
                                                <h6>Photography</h6>
                                                <p> Bhah blah blah blaaaaaah blah blahhhhh abbk Bhah blah blah blaaaaaah blah blahhhhh abbk Bhah blah blah blaaaaaah blah blahhhhh abbk.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- feature -->
                                    <li>
                                        <div class="right-features-box animated out" data-animation="fadeInRight" data-delay="0">
                                            <span class="iconbox"><i class="icon-presentation"></i></span>
                                            <div class="features-box-content">
                                                <h6>Roora</h6>
                                                <p> Bhah blah blah blaaaaaah blah blahhhhh abbk Bhah blah blah blaaaaaah blah blahhhhh abbk.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- feature -->

                                </ul> <!-- end features-list -->
                            </div>
                        </div> <!-- end col-md-3 -->

                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </section>
        <!-- End features-section -->

        <!-- Team
        ================================================== -->
        <section>
            <div id="team-section" class="pad-sec">
                <div class="container">
                    <div class="title-section animated out" data-animation="fadeInUp" data-delay="0">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2>Our awesome team</h2>
                                <hr>
                                <p>Seamlessly restore client-focused potentialities rather than functional strategic theme areas. Credibly e-enable value-added portals with clicks-and-mortar initiatives.</p>
                            </div>
                        </div> <!-- End row -->
                    </div> <!-- end title-section -->

                    <div class="team-members">
                        <div class="row">

                            <!-- member-team -->
                            <div class="col-sm-4">
                                <div class="member-team animated out" data-animation="fadeInLeft" data-delay="0">
                                    <img src="assets/images/team/m1.jpg" alt="">
                                    <div class="magnifier">
                                        <div class="magnifier-inner">
                                            <h3>MICHAEL ROOF</h3>
                                            <p>Co_founder &amp; Designer</p>
                                            <p>We’ll etch your brand onto tangible objects: business cards, ads, stickers, brochures, you name it. You won’t see business cards, ads, stickers, brochures anything until we’re done drooling at the result.</p>
                                            <ul class="social-icons">

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Facebook" href="#" data-original-title="" title=""><i class="fa fa-facebook"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Twitter" href="#" data-original-title="" title=""><i class="fa fa-twitter"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Google Plus" href="#" data-original-title="" title=""><i class="fa fa-google-plus"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Skype" href="#" data-original-title="" title=""><i class="fa fa-skype"></i></a></li>

                                            </ul>
                                        </div> <!-- End magnifier-inner -->
                                    </div> <!-- End magnifier -->
                                </div> <!-- End member-team -->
                            </div> <!-- End col-sm-4 -->

                            <!-- member-team -->
                            <div class="col-sm-4">
                                <div class="member-team animated out" data-animation="fadeInUp" data-delay="0">
                                    <img src="assets/images/team/m2.jpg" alt="">
                                    <div class="magnifier">
                                        <div class="magnifier-inner">
                                            <h3>CHARLES WHITE</h3>
                                            <p>Co_founder &amp; Designer</p>
                                            <p>We’ll etch your brand onto tangible objects: business cards, ads, stickers, brochures, you name it. You won’t see business cards, ads, stickers, brochures anything until we’re done drooling at the result.</p>
                                            <ul class="social-icons">

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Facebook" href="#" data-original-title="" title=""><i class="fa fa-facebook"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Twitter" href="#" data-original-title="" title=""><i class="fa fa-twitter"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Google Plus" href="#" data-original-title="" title=""><i class="fa fa-google-plus"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Skype" href="#" data-original-title="" title=""><i class="fa fa-skype"></i></a></li>

                                            </ul>
                                        </div> <!-- End magnifier-inner -->
                                    </div> <!-- End magnifier -->
                                </div> <!-- End member-team -->
                            </div> <!-- End col-sm-4 -->

                            <!-- member-team -->
                            <div class="col-sm-4">
                                <div class="member-team animated out" data-animation="fadeInRight" data-delay="0">
                                    <img src="assets/images/team/m3.jpg" alt="">
                                    <div class="magnifier">
                                        <div class="magnifier-inner">
                                            <h3>MARTIN CAMBRIGE</h3>
                                            <p>Head Support</p>
                                            <p>We’ll etch your brand onto tangible objects: business cards, ads, stickers, brochures, you name it. You won’t see business cards, ads, stickers, brochures anything until we’re done drooling at the result.</p>
                                            <ul class="social-icons">

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Facebook" href="#" data-original-title="" title=""><i class="fa fa-facebook"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Twitter" href="#" data-original-title="" title=""><i class="fa fa-twitter"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Google Plus" href="#" data-original-title="" title=""><i class="fa fa-google-plus"></i></a></li>

                                                <li><a data-rel="tooltip" data-toggle="tooltip" data-trigger="hover" data-placement="bottom" data-title="Skype" href="#" data-original-title="" title=""><i class="fa fa-skype"></i></a></li>

                                            </ul>
                                        </div> <!-- End magnifier-inner -->
                                    </div> <!-- End magnifier -->
                                </div> <!-- End member-team -->
                            </div> <!-- End col-sm-4 -->

                        </div>
                    </div> <!-- End team-members -->
                </div> <!-- End container -->
            </div> <!-- End team-section -->
        </section>
        <!-- End team section -->

        <!-- Banner-Services
        ================================================== -->

        <section>
            <div class="sep-section"></div>
        </section>

        <!-- Creative section-1

        <section>
            <div class="sep-section"></div>
        </section>


        ================================================== -->
        <section>
            <div id="screenshots-section" class="pad-sec">
                <div class="container">
                    <div class="title-section text-center animated out" data-animation="fadeInUp" data-delay="0">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2>Our gallery</h2>
                                <hr>
                                <p>This is a contemporary gallary filled with some our previous works.</p>
                            </div>
                        </div> <!-- End row -->
                    </div> <!-- end title-section -->
                    
                                    <img class="d-block w-100" src="/assets/images/screenshots/pic6.jpg" alt="Third slide">
                            <!-- end screenshots-carousel -->
                    <!-- end col-md-12 -->
                    </div> <!-- end row -->
                </div><!--  end container -->

        </section>
        <!-- End screenshots-section -->

        <!-- Clients-section
      ================================================== -->

        <!-- Prices
        ================================================== -->
        <section>
            <div id="prices-section" class="pad-sec">
                <div class="container">
                    <div class="title-section text-center animated out" data-animation="fadeInUp" data-delay="0">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2>Our Prices</h2>
                                <hr>
                                <p>Seamlessly restore client-focused potentialities rather than functional strategic theme areas.</p>
                            </div>
                        </div> <!-- End row -->
                    </div> <!-- end title-section -->

                    <div class="row">
                        <div class="col-sm-4">
                            <ul class="price-table animated out" data-animation="fadeInLeft" data-delay="0">
                                <li class="title-price">
                                    <h3>Basic Event</h3>
                                </li>
                                <li class="price-box">
                                    <p class="price"><span class="currency">$</span>250.00</p>
                                    <p class="months">per month</p>
                                </li>
                                <li><p>Full decorations</p></li>
                                <li>
                                    <p>Catering for 20 people</p>
                                </li>
                                <li>
                                    <p>Chairs, Table, Cutlery</p>
                                </li>

                                <li>
                                    <a href="#" class="btn btn-sm btn-dark">Purchase</a>
                                </li>
                            </ul>
                        </div> <!-- end col-sm-4 -->

                        <div class="col-sm-4">
                            <ul class="price-table animated out" data-animation="fadeInUp" data-delay="0">
                                <li class="title-price">
                                    <h3>Medium Event</h3>
                                </li>
                                <li class="price-box">
                                    <p class="price"><span class="currency">$</span>800.00</p>
                                    <p class="months">per month</p>
                                </li>
                                <li><p>Full Decorations</p></li>
                                <li>
                                    <p>Catering for 50 people</p>
                                </li>
                                <li>
                                    <p>Tents, tables ,chairs and cutlery</p>
                                </li>

                                <li>
                                    <a href="#" class="btn btn-sm btn-dark">Purchase</a>
                                </li>

                            </ul>
                        </div> <!-- end col-sm-4 -->

                        <div class="col-sm-4">
                            <ul class="price-table animated out" data-animation="fadeInRight" data-delay="0">
                                <li class="title-price">
                                    <h3>Huge Event</h3>
                                </li>
                                <li class="price-box">
                                    <p class="price"><span class="currency">$</span>1500.00</p>
                                    <p class="months">per month</p>
                                </li>
                                <li><p>Full Decorations</p></li>
                                <li>
                                    <p>100 people</p>
                                </li>
                                <li>
                                    <p>Tents, Tables, Chairs and Cutlery</p>
                                </li>
                                <li>
                                    <p>Open Bar</p>
                                </li>
                                <li><p>Music System</p></li>

                                <li>
                                    <a href="#" class="btn btn-sm btn-dark">Purchase</a>
                                </li>
                            </ul>
                        </div> <!-- end col-sm-4 -->
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </section>
        <!-- End prices section -->



        <section>
            <div id="contact-section" class="pad-sec">

                <div class="container">

                    <div class="title-section text-center animated out" data-animation="fadeInUp" data-delay="0">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2>Get in touch</h2>
                                <hr>
                                <p>Ask us a question and we will get in touch.</p>
                            </div>
                        </div> <!-- End row -->
                    </div> <!-- end title-section -->

                    <div class="form-wrapper">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">

                                <!-- form fields -->
                                <form action="assets/php/contact.php.htm" method="post" name="contactform" id="contactform" class="animated out" data-animation="fadeInUp" data-delay="0">

                                    <fieldset>
                                        <div class="form-group">
                                            <input class="form-control br-b" type="text" name="name" id="name" placeholder="Name">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control br-b" type="email" name="email" id="email" placeholder="Email">
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control br-b" name="message" id="message" placeholder="Message..."></textarea>
                                        </div>
                                    </fieldset>

                                    <!-- submit button -->
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Send message" id="submit" class="btn btn-sm btn-dark">
                                    </div>

                                    <div id="alert"></div>

                                </form>

                            </div> <!-- end col-md-8 -->
                        </div> <!-- end row -->
                    </div>  <!-- end form-wrapper -->

                </div> <!-- end container -->

            </div> <!-- End contact-section -->
        </section>

        <!-- Contact-info
        ================================================== -->
        <section>
            <div class="contact-info">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="#"><i class="pe-7s-map-marker"></i>123 Road. Warren Park D.</a>
                        </div> <!-- End col-sm-4 -->
                        <div class="col-sm-4">
                            <a href="tel:+123000456"><i class="pe-7s-phone"></i>077 766 0000</a>
                        </div>
                        <div class="col-sm-4">
                            <a href="mailto:hello@hotmail.com"><i class="pe-7s-mail"></i>chero@hotmail.com</a>
                        </div>
                    </div> <!-- End row -->
                </div> <!-- End container -->
            </div> <!-- End contact-info -->
        </section>

        <!-- Footer
        ================================================== -->
        <footer>
            <div id="footer-section" class="text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <ul class="footer-social-links">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Instagram</a></li>

                            </ul>
                            <p class="copyright">
                                &copy; {{ now()->year }} - Developed By Umoja Africa.
                            </p>
                        </div> <!-- End col-sm-8 -->
                    </div> <!-- End row -->
                </div> <!-- End container -->
            </div> <!-- End footer-section  -->
        </footer>
        <!-- End footer -->

    </div>
@endsection
