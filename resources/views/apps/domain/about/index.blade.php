@extends('apps.layout.base')

@section('title', "About ours university")

@section('content')
    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
                <div class="sidebar-textwidget">

                    <!-- Sidebar Info Content -->
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo-2.png" alt="" /></a>
                            </div>
                            <div class="content-box">
                                <h2>About Us</h2>
                                <p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
                                <a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
                            </div>
                            <div class="contact-info">
                                <h2>Contact Info</h2>
                                <ul class="list-style-two">
                                    <li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
                                    <li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
                                    <li><span class="icon fa fa-envelope"></span>lebari@gmail.com</li>
                                    <li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                                </ul>
                            </div>
                            <!-- Social Box -->
                            <ul class="social-box">
                                <li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
                                <li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
                                <li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                                <li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
                                <li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <section class="contact-banner-section">
        <div class="pattern-layer-one" style="background-image: url(images/icons/icon-5.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(images/icons/icon-6.png)"></div>
        <div class="pattern-layer-three" style="background-image: url(images/icons/icon-4.png)"></div>
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Contact us</li>
            </ul>
            <div class="content-box">
                <h2>Contact Now</h2>
                <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Duis aute irure dolor in reprehenderit in </div>
            </div>
        </div>
    </section>
    <section class="contact-page-section">
        <div class="pattern-layer-three" style="background-image: url(images/icons/icon-8.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title">GET IN TOUCH</div>
                        <h2>Visit one of our agency locations <br> or contact us today</h2>
                        <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, </div>
                        <ul>
                            <li><span>Address</span>56 Glassford Street Glasgow G1 1UL New York</li>
                            <li><span>Our Phone</span>Telephone : 028577101<br>Mobile : 01781648101</li>
                            <li><span>Our Email</span>Telephone : 028577101<br>Mobile : 01781648101</li>
                            <li><span>Opening Hours</span>Monday to Saturday: 9.00am to 16.pm</li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="circle-layer"></div>
                        <div class="pattern-layer-one" style="background-image: url(images/icons/icon-7.png)"></div>
                        <div class="pattern-layer-two" style="background-image: url(images/icons/icon-9.png)"></div>
                        <h2>Leave a message</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut <br> blandit arcu in pretium.</div>

                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post" action="sendemail.php" id="contact-form">

                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Name" required="">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>

                                <div class="form-group">
                                    <textarea class="" name="message" placeholder="Comment"></textarea>
                                </div>

                                <div class="form-group">
                                    <button class="theme-btn btn-style-five" type="submit" name="submit-form">Send Message</button>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        </div>
    </section>
    <section class="map-contact-section">
        <div class="auto-container">
            <div class="map-boxed">
                <div class="map-outer">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
