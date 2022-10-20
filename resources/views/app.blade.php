<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Transportation & Agency Template is a simple Smooth transportation and Agency Based Template" />
    <meta name="keywords" content="Portfolio, Agency, Onepage, Html, Business, Blog, Parallax" />


    <title>Our Painting & Decorating</title>


    <link rel="shortcut icon" type="image/ico" href="{{asset('assets/img/favicon.ico')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/stellarnav.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
{{--    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >

    <link href="{{asset('assets/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"  />

 <!-- light box -->

    <link rel="stylesheet" href="{{asset('assets/demo/demo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/demo/css/lumos.css')}}">

</head>

<body class="home-one">

<div class="preeloader">
    <div class="preloader-spinner"></div>
</div>


<a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>


<header class="top-area" id="home">
    <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
    <div class="header-top-area">

        <div class="mainmenu-area" id="mainmenu-area">
            <div class="mainmenu-area-bg"></div>
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <a href="{{url('/')}}" class="navbar-brand">
                            <img src="{{asset('assets/img/white-logo.jpg')}}" style="width: 100px;height: 50px;" alt="logo"></a>
                    </div>
                    <div class="search-and-language-bar pull-right">


                    </div>
                    <div id="main-nav" class="stellarnav">
                        <ul id="nav" class="nav navbar-nav">
                            <li><a href="{{url('/')}}">home</a>

                            </li>

                            <li><a href="{{url('get-quote')}}">Get A Qute</a></li>
                            <li><a href="{{url('services')}}">Services</a></li>

                            <li class="has-sub drop-down"><a href="{{url('gallery/before&after')}}">Gallery</a>
                                <ul style="display: none;">
                                    <li class=""><a href="{{url('gallery/before&after')}}"> Before & After </a></li>
                                    <li class=""><a href="{{url('gallery/previous_works')}}"> Previous Works</a></li>

                                </ul>
                                <a class="dd-toggle" href="#"><i class="fa fa-plus"></i></a></li>

                            <li><a href="{{url('about')}}">About</a>
                            <li><a href="{{url('contact')}}">Contact Us</a>
                            <li class="has-sub drop-down"><a href="{{url('google-reviews')}}">Reviews</a>
                                <ul style="display: none;">
                                    <li class=""><a href="{{url('https://hipages.com.au/connect/ourpaintinganddecorating')}}" target="_blank">    HiPages </a></li>
                                    <li class=""><a  href="{{url('google-reviews')}}"> Google</a></li>

                                </ul>
                                <a class="dd-toggle" href="#"><i class="fa fa-plus"></i></a></li>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </div>

    <div class="welcome-slider-area">
        
         @if(count($sliders) >0)
                @foreach($sliders as $slider)
                
        <div class="welcome-single-slide slider-bg-one" style="background: url('{{voyager::image($slider->image)}}') no-repeat scroll center center / cover">
            <div class="container">
                <div class="row flex-v-center">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="welcome-text text-center">
                            <h1>{!! $slider->title !!} </h1>
                            <h3 style="color:#fff"> {!! $slider->details !!} </h3>
                            <p>
                                Our :  <a href="tel:0466961561" style="color: #fff;">0466961561</a>
                            </p>
                            <div class="home-button">

                                <a href="{{url('get-quote')}}">Get A Free Quate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  @endforeach
                        @endif

      
    </div>

</header>

@yield("content")

<div class="footer-area dark-bg">
    <div class="footer-area-bg"></div>
    <div class="footer-top-area wow fadeIn">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="footer-border"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-footer-widget footer-about">
                        <h3>About Us</h3>
                        <p>Our Painting and Decorating.</p>
                        <ul>
                            <li><i class="fa fa-phone"></i> <a href="callto:+61466961561">+61 466 961 561</a></li>
                            <li><i class="fa fa-map-marker"></i> <a href="mailto:gpd.nsw@gmail.com">gpd.nsw@gmail.com</a></li>
                            <li><i class="fa fa-phone"></i> moriset NSW 2264 .</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-footer-widget list-widget">
                        <h3>Customer Service</h3>
                        <ul>
                            <li><a href="#">info@ourpainting.com.au</a></li>
                            <li><a href="#">quote@ourpainting.com.au</a></li>

                            <li><a href="{{url('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-footer-widget instafeed-widget">
                        <h3>  Some Images</h3>
                        <ul>
                            <li><a href="#"><img src="{{asset('assets/img/instafeed/1.JPG')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('assets/img/instafeed/2.JPG')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('assets/img/instafeed/3.JPG')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('assets/img/instafeed/4.JPG')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('assets/img/instafeed/5.JPG')}}" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('assets/img/instafeed/6.JPG')}}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-border"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="footer-copyright wow fadeIn">

                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by  Hasan Ali </p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="footer-social-bookmark text-right wow fadeIn">
                        <ul class="social-bookmark">
                            <li><a href="https://www.facebook.com/GPD.NSW/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/gpd.nsw/"><i class="fa fa-instagram"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/vendor/jquery.easing.1.3.js')}}"></script>
{{--<script src="{{asset('assets/js/vendor/jquery-migrate-1.2.1.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/vendor/jquery.appear.js')}}"></script>--}}
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/stellar.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/stellarnav.min.js')}}"></script>
{{--<script src="{{asset('assets/js/contact-form.js')}}"></script>--}}
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" ></script>


<script src="{{asset('assets/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>

<!-- light box -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('assets/demo/js/lumos.js')}}"></script>

</body>

</html>
@stack("myjs")