@extends('app')
@section("content")

<!--BLOG AREA-->
<section class="blog-area gray-bg padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-image">
                        <img src="{{asset('assets/img/external_painting.jpg')}}" alt="" >
                    </div>
                    <div class="blog-details text-center">
                        <div class="blog-meta"><a href="{{route('service.details',["1"])}}"><i class="fa fa-paint-brush"></i></a></div>
                        <h3><a href="{{route('service.details',["1"])}}">  Internal House Painting </a></h3>
                        <p> With our interior painting services, change your home's look with professional workmanship.
                            Improve your home's ambience and
                            make it look brand-new again...</p>
                        <a href="{{route('service.details',["1"])}}" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-image">
                        <img src="{{asset('assets/img/external_painting.jpg')}}" alt=""  >
                    </div>
                    <div class="blog-details text-center">
                        <div class="blog-meta"><a href="{{route('service.details',["1"])}}"><i class="fa fa-paint-brush"></i></a></div>
                        <h3><a href="{{route('service.details',["1"])}}">External House Painting</a></h3>
                        <p> Brighten your home with a renewed curb appeal with our quality exterior painting services. Our
                            skilled team of experienced painters offers
                            excellent service combined with...</p>
                        <a href="{{route('service.details',["1"])}}" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="single-blog wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-image">
                        <img src="{{asset('assets/img/external_painting.jpg')}}" alt="">
                    </div>
                    <div class="blog-details text-center">
                        <div class="blog-meta"><a href="{{route('service.details',["2"])}}"><i class="fa fa-paint-brush"></i></a></div>
                        <h3><a href="{{route('service.details',["2"])}}">  Commercial Painting </a></h3>
                        <p> for excellent results when new paint is necessary to create an enticing, engaging look for your commercial property. We will revive the
                            elegance of your company through our...</p>
                        <a href="{{route('service.details',["2"])}}" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BLOG AREA END-->

<!--ABOUT AREA-->
<section class="about-area gray-bg section-padding" id="getQute">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="quote-form-area wow fadeIn">
                    <h3>Get A Quote</h3>
                    <form class="quote-form" action="#" id="contact-form">
                        @csrf
                        <p class="width-full">
                            <input type="text" name="name" id="name" placeholder="Your Name">
                        </p>
                        <p class="width-full">
                            <input type="email" name="email" id="email" placeholder="Email">
                            <input class="pull-right" type="phone"  id="form-phone" name="phone" placeholder="Phone">
                        </p>
                        <p class="width-full">
                            <input type="text" id="job_type" name="job_type" placeholder="Type">
                            <input class="pull-right" type="text" id="budget" name="budget" placeholder="Budget..">
                        </p>

                        <p>
                            <textarea id="form-message" name="message" cols="30" rows="4" placeholder=" Your Job Details..."></textarea>
                        </p>
                        <button type="submit">Book Now</button>
                    </form>
                </div>
            </div>
            <div class="col-md-7 col-lg-7 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                <div class="about-content-area wow fadeIn">
                    <div class="about-content">
                        <h2>We have 5 years Painter's WorkManShip WARRANTY</h2>
                        <p>
                            We promise the work will not peel, flake, or blister due to the surface preparation or application of the Coating System.
                        </p>
                        <p>
                            Keep Your Home looking for the best by contracting Our Painting.
                        </p>

                    </div>
                    <div class="about-count">
                        <div class="single-about-count">
                            <h4><i class="fa fa-suitcase"></i> 120</h4>
                            <p>Project Done</p>
                        </div>
                        <div class="single-about-count">
                            <h4><i class="fa fa-thumbs-o-up"></i> 100</h4>
                            <p>Project Done</p>
                        </div>
                        <div class="single-about-count">
                            <h4><i class="fa fa-users"></i> 30</h4>
                            <p>Project Done</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ABOUT AREA END-->

<!--SERVICE AREA-->
<section class="service-area">
    <div class="service-top-area padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Our Service</h2>
                        <p> We Provide Alot of painting services with quality products for Home,  business, commercial property, or strata ,
                            With Geogrge Painting You get the job done efficiently, correctly, and in a timely manner </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="service-content wow fadeIn">
                        <h2>We Offer Painting & Decorating  Solutions</h2>
                        <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you.</p>
                        <a href="#" class="read-more">Learn More</a>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="service-catalouge-content-area wow fadeIn">
                        <div class="service-catalouge-bg"></div>
                        <div class="row">
                            <div class="col-md-7 col-lg-7 col-md-offset-5 col-lg-offset-5 col-sm-12 col-xs-12">
                                <div class="catalouge-content">
                                    <h3>Why Choose Us ?</h3>
                                    <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you.</p>
                                    <ul>
                                        <li><i class="fa fa-check"></i> Enquiries.</li>
                                        <li><i class="fa fa-check"></i> Pricing.</li>
                                        <li><i class="fa fa-check"></i> Customer Service.</li>
                                        <li><i class="fa fa-check"></i> Professional Painters.</li>
                                        <li><i class="fa fa-check"></i> On Time.</li>
                                    </ul>
                                    <!--                                        <a href="service.html" class="read-more">Learn More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-bottom-area section-padding">
        <div class="service-bottom-area-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-6 col-lg-offset-6 col-sm-12 col-xs-12">
                    <div class="service-list wow fadeIn">
                        <div class="single-service">
                            <div class="service-icon-hexagon">
                                <div class="hex">
                                    <div class="service-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-details">
                                <h4>  House</h4>
                                <p> We Paint House .......</p>
                                <a href="#">read more</a>
                            </div>
                        </div>
                        <div class="single-service">
                            <div class="service-icon-hexagon">
                                <div class="hex">
                                    <div class="service-icon"><i class="fa fa-paint-brush"></i></div>
                                </div>
                            </div>
                            <div class="service-details">
                                <h4>  Woodwork </h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                <a href="#">read more</a>
                            </div>
                        </div>
                        <div class="single-service">
                            <div class="service-icon-hexagon">
                                <div class="hex">
                                    <div class="service-icon"><i class="fa fa-ship"></i></div>
                                </div>
                            </div>
                            <div class="service-details">
                                <h4>Sea Freight</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                <a href="#">read more</a>
                            </div>
                        </div>
                        <div class="single-service">
                            <div class="service-icon-hexagon">
                                <div class="hex">
                                    <div class="service-icon"><i class="fa fa-plane"></i></div>
                                </div>
                            </div>
                            <div class="service-details">
                                <h4>Air Freight</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                <a href="#">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SERVICE AREA END-->

<!--PROMO AREA-->
<section class="promo-area">
    <div class="promo-top-area section-padding wow fadeIn" style="    background: rgba(0, 0, 0, 0) url('{{asset("assets/img/colors.jpg")}}') no-repeat scroll right 5% bottom 50% / 40% auto;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-promo">
                        <div class="promo-icon"><i class="fa fa-anchor"></i></div>
                        <div class="promo-details">
                            <h3>Our Location</h3>
                            <p>Office : 29 road, Sec-08, Uttara-1204, Dhaka, Bangladesh. </p>
                        </div>
                    </div>
                    <div class="single-promo">
                        <div class="promo-icon"><i class="fa fa-newspaper-o"></i></div>
                        <div class="promo-details">
                            <h3>New Services</h3>
                            <p>We recently Provide a new service for painting.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-promo">
                        <div class="promo-icon"><i class="fa fa-umbrella"></i></div>
                        <div class="promo-details">
                            <h3>24/7 Support</h3>

                        </div>
                    </div>
                    <div class="single-promo">
                        <div class="promo-icon"><i class="fa fa-bicycle"></i></div>
                        <div class="promo-details">
                            <h3>Fast Delevery</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="promo-bottom-area section-padding">
        <div class="promo-botton-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12 text-center">
                    <div class="promo-bottom-content wow fadeIn">
                        <h2>we provide international freight &amp; logistics service worldwidw</h2>
                        <a href="#getQute" class="read-more">Get a quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--PROMO AREA END-->

<!--TESTMONIAL AREA -->
<section class="testmonial-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h2>what client’s say</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                <div class="client-photo-list wow fadeIn">
                    <div class="client_photo">
                        <div class="item">
                            <img src="{{asset('assets/img/testmonial/client.png')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{asset('assets/img/testmonial/client.png')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{asset('assets/img/testmonial/client.png')}}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{asset('assets/img/testmonial/client.png')}}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="client_nav">
                    <span class="fa fa-angle-left testi_prev"></span>
                    <span class="fa fa-angle-right testi_next"></span>
                </div>
            </div>
            <div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
                <div class="client-details-content wow fadeIn">
                    <div class="client_details">
                        <div class="item">
                            <q>Connected with Our Painting and Decorating through hipages.com.au and we have confirmed that they would recommend them. </q>
                            <h3>Heather F</h3>
                            <p>from Swansea, NSW</p>
                        </div>
                        <div class="item">
                            <q>Connected with Our Painting and Decorating through hipages.com.au and we have confirmed that they would recommend them. </q>
                            <h3>Stephen</h3>
                            <p>from Shelly Beach, NSW</p>
                        </div>
                        <div class="item">
                            <q>It was good, I am very satisfied with the job and I would definitely recommend him.. </q>
                            <h3> Felicia </h3>
                            <p>from Belmont, NSW</p>
                        </div>
                        <div class="item">
                            <q>Connected with Our Painting and Decorating through hipages.com.au and we have confirmed that they would recommend them. </q>
                            <h3>  Rebecca M</h3>
                            <p>from Cameron Park, NSW</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--TESTMONIAL AREA END -->
@endsection

@push('myjs')

    <script>
        $(function () {

            $('#contact-form').submit(function (e) {

                e.preventDefault();

                $("#book_now").html('Sending..');


                $.ajax({

                    data: $('#contact-form').serialize(),

                    url: "{{ route('quote.store') }}",

                    type: "POST",

                    dataType: 'json',

                    success: function (data) {
                        $("#book_now").html("Book Now");




                        if(data.status==200){
                            $('#contact-form').trigger("reset");
                            toastr.success(data.message);

                        }
                        else{
                            toastr.warning(data.message);
                        }



                    },

                    error: function (data) {
                        $("#book_now").html("Book Now");
                        toastr.error(data.message );

                        console.log('Error:', data);


                    }

                });

            });
        });
    </script>
@endpush