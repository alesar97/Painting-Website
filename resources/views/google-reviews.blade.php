@extends('app')
@section("content")
    <style>
        .checked {
            color: orange;
        }

        .bar-5 { height: 18px; background-color: #4CAF50;}
        .bar-4 { height: 18px; background-color: #2196F3;}
        .bar-3 { height: 18px; background-color: #00bcd4;}
        .bar-2 {height: 18px; background-color: #ff9800;}
        .bar-1 { height: 18px; background-color: #f44336;}


    </style>

    <!--ABOUT DETAILS AREA-->
    <section class="about-details-area section-padding wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2> Google Reviews  </h2>
                        <p> See What Customers see About us on google maps reviews.  </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="tab-content about-details-content">

                        <div id="history" class="company-history tab-pane active">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 user-rating">

                                    <span class="heading">User Rating</span>

                                    @for($i=1;$i<=5;$i++)
                                        @if($i <= $review_stars/$reviews_count)
                                            <span class="fa fa-star checked"></span>
                                        @else
                                            <span class="fa fa-star"></span>
                                        @endif
                                    @endfor
                                    <p> {{$review_stars/$reviews_count}} average based on  {{$reviews_count}} reviews.</p>
                                    <hr style="border:3px solid #f1f1f1">

                                    <div class="row">

                                        <div class="col-md-1">
                                            <div>5 star</div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="progress">
                                                <div class="progress-bar bar-5" role="progressbar" style="width: {{$stars_5/$reviews_count*100}}%" aria-valuenow="{{$stars_5/$reviews_count*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div>{{$stars_5}}</div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-1">
                                            <div>4 star</div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="progress">
                                                <div class="progress-bar bar-4" role="progressbar" style="width: {{$stars_4/$reviews_count*100}}%" aria-valuenow="{{$stars_4/$reviews_count*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div>{{$stars_4}}</div>

                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-1">
                                            <div>3 star</div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="progress">
                                                <div class="progress-bar bar-3" role="progressbar" style="width: {{$stars_3/$reviews_count*100}}%" aria-valuenow="{{$stars_3/$reviews_count*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div>{{$stars_3}}</div>

                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-1">
                                            <div>2 star</div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="progress">
                                                <div class="progress-bar bar-2" role="progressbar" style="width: {{$stars_2/$reviews_count*100}}%" aria-valuenow="{{$stars_2/$reviews_count*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div>{{$stars_2}}</div>

                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-1">
                                            <div>1 star</div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="progress">
                                                <div class="progress-bar bar-1" role="progressbar" style="width: {{$stars_1/$reviews_count*100}}%" aria-valuenow="{{$stars_1/$reviews_count*100}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div>{{$stars_1}}</div>

                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 user-rating">

                                        <div class="row">
                                            <span class="heading">User Reviews</span>

                                        </div>
                                        <br>
                                        @foreach($services as $item)
                                        <div class="row">
                                          <div class="col-md-2">
                                              <img src="{{Voyager::image($item->first_letter)}}" class="img img-circle" style="width: 110px" alt="">
                                          </div>
                                          <div class="col-md-10">
                                              <p>
                                                  {{$item->name}} <span> </span>
                                              </p>
                                              <p>
                                                  <time class="timeago" datetime="{{$item->review_date}}">July 17, 2008</time>
                                              </p>
                                              <p>
                                                @for($i=1;$i<=5;$i++)
                                                    @if($i <= $item->stars)
                                                  <span class="fa fa-star checked"></span>
                                                      @else
                                                  <span class="fa fa-star"></span>
                                                      @endif
                                                  @endfor



                                              </p>
                                              <p>
                                                  {{$item->review}}
                                              </p>
                                          </div>

                                        </div>
                                            <br>
                @endforeach
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

    <script src="{{asset('assets/js/jquery.timeago.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery("time.timeago").timeago();
        });
    </script>
    @endpush