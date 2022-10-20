@extends('app')
@section("content")

    <!--ABOUT DETAILS AREA-->
    <section class="about-details-area section-padding wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>about carries</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <ul class="about-details-menu">

                        <li class="active"><a data-toggle="tab" href="#history" class="active" area-expaned="true" aria-expanded="true">Our Story</a></li>

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="tab-content about-details-content">

                        <div id="history" class="company-history tab-pane active">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <p>
                                            Hello my name's Our , my GrandFather worked for a painting company in Beirut, Lebanon back in 1971.
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="about-history-content">
                                        <img src="img/about/about-cargo.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="about-history-content history-list">
                                        <div class="single-history">
                                            <div class="history-year">
                                                <p>1971</p>
                                            </div>
                                            <p>
                                                He then went to his home town of Zaidal.a small village in Syria and started his painting business their.
                                                he named the business Our Painting after his oldest son and his four boys all became painters.
                                            </p>
                                        </div>
                                        <div class="single-history">
                                            <div class="history-year">
                                                <p>1989</p>
                                            </div>
                                            <h4></h4>
                                            <p>
                                                My Grandfather retired, and my father had the
                                                pleasure to follow in the footsteps of his father.
                                                My father has always been very passionate in his work and his
                                                only condition was when we decided to move to Australia
                                                early 2016, was that I promise to follow the same path.
                                            </p>
                                        </div>
                                        <div class="single-history">
                                            <div class="history-year">
                                                <p>Now</p>
                                            </div>

                                            <p>
                                                I now very proudly offer Our Painting to the lovely people of Australia.
                                                We've always believed in providing the best service possible and it's our goal
                                                to ensure the heighest quality and standards.
                                            </p>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT DETAILS AREA END-->

@endsection
@push('myjs')


    @endpush