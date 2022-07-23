
<!doctype html>

<html lang="en">

<head>

    <!-- Basic -->
    <title>ABCD Servise</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="Sulfur - Responsive HTML5 Template">
    <meta name="author" content="Shahriyar Ahmed">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}" type="text/css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('public/font-awesome/css/font-awesome.min.css') }}" type="text/css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/owl.theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/owl.transitions.css') }}" type="text/css">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/animate.css') }}">

    <!-- Sulfur CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">

    <!-- Responsive CSS Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/responsive.css') }}">


    <script src="{{ asset('public/js/modernizrr.js') }}"></script>


</head>

<body>

    <header class="clearfix">


        <!-- Start  Logo & Naviagtion  -->
        <div class="navbar navbar-default navbar-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Stat Toggle Nav Link For Mobiles -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- End Toggle Nav Link For Mobiles -->
                    <a class="navbar-brand" href="index.html">Sulfur</a>
                </div>
                <div class="navbar-collapse collapse">

                    <!-- Start Navigation List -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        @auth
                            <li>
                                <a href="{{ route('police.dashboard') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                </li>
                            @endif
                        @endauth


                    </ul>
                    <!-- End Navigation List -->
                </div>
            </div>
        </div>
        <!-- End Header Logo & Naviagtion -->

    </header>


    <!-- Start Header Section -->
    <div class="banner">
        <div class="overlay">
            <div class="container">
                <div class="intro-text">
                    <h1>Welcome To The <span>TRAFFIC FINE</span></h1>
                    <p>OUR MISSION STATEMENT "SAFE DRIVE SAVE LIFE” <br> Objectives To ensure smooth and hassle free
                        road journey.</p>
                    <a href="#" class="page-scroll btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Section -->




    <!-- Start Footer Section -->
    <section id="footer-section" class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-heading-2">
                        <h3 class="section-title">
                            <span>Office Address</span>
                        </h3>
                    </div>

                    <div class="footer-address">
                        <ul>
                            <li class="footer-contact"><i class="fa fa-home"></i>123, Second Street name, Address</li>
                            <li class="footer-contact"><i class="fa fa-envelope"></i><a
                                    href="#">info@domain.com</a></li>
                            <li class="footer-contact"><i class="fa fa-phone"></i>+1 (123) 456-7890</li>
                            <li class="footer-contact"><i class="fa fa-globe"></i><a href="#"
                                    target="_blank">www.domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <!--/.col-md-3 -->


                <div class="col-md-3">
                    <div class="section-heading-2">
                        <h3 class="section-title">
                            <span>Latest Tweet</span>
                        </h3>
                    </div>

                    <div class="latest-tweet">
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-twitter fa-2x media-object"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">About 15 days ago</h4>
                                <p>Finally #tutsplus start a tutorial on A Beginner’s Guide to Using #joomla . Check it
                                    out here http://t.co/i6S4zeW8Z0</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.col-md-3 -->

                <div class="col-md-3">
                    <div class="section-heading-2">
                        <h3 class="section-title">
                            <span>Stay With us</span>
                        </h3>
                    </div>
                    <div class="subscription">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your E-mail" id="name"
                                required data-validation-required-message="Please enter your name.">
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Footer Section -->


    <!-- Start CCopyright Section -->
    <div id="copyright-section" class="copyright-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="copyright">
                        Copyright © 2014. All Rights Reserved.Design and Developed by <a
                            href="http://www.themefisher.com">Themefisher</a>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="copyright-menu pull-right">
                        <ul>
                            <li><a href="#" class="active">Home</a></li>
                            <li><a href="#">Sample Site</a></li>
                            <li><a href="#">getbootstrap.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.row -->
        </div><!-- /.container -->
    </div>
    <!-- End CCopyright Section -->



    <!-- Sulfur JS File -->
    <script src="{{ asset('public/js/jquery-2.1.3.min.js') }}"></script>
    {{-- <script src="{{ asset('public/js/jquery-migrate-1.2.1.min.js') }}"></script> --}}
    <script src="{{ asset('public/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('public/js/script.js') }}"></script>


</body>

</html>
