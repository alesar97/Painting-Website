@extends('app')
@section("content")
    <link href="{{asset('assets/css/foundation.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/twentytwenty.css')}}" rel="stylesheet" type="text/css" />

    <!--SERVICE AREA-->
    <section class="service-area-three section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Our Gallery</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, </p>
                    </div>
                </div>
            </div>
        @foreach($images as $item)
            @if($loop->index %2==0)
            <div class="row" style="margin-top: 2em; margin-bottom: 2em;">
                <div class="large-4 columns">
                    <h3>  {{$item->title}}  </h3>
                    <p>details</p>
                </div>
                <div class="large-8 columns">
                    <div class="twentytwenty-container" data-orientation="horizontal">
                        <img src="{{Voyager::image($item->first_image)}}" />
                        <img src="{{Voyager::image($item->second_image)}}" />
                    </div>
                </div>
            </div>
                @else
                    <div class="row" style="margin-top: 2em; margin-bottom: 2em;direction: rtl">

                        <div class="large-8 columns" >
                            <div class="twentytwenty-container" data-orientation="horizontal">
                                <img src="{{Voyager::image($item->first_image)}}" />
                                <img src="{{Voyager::image($item->second_image)}}" />
                            </div>
                        </div>
                        <div class="large-4 columns">
                            <h3>  {{$item->title}}</h3>
                            <p>details</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    <!--SERVICE AREA END-->

@endsection
@push('myjs')
    <!--gallery-->
    <script src="{{asset('assets/js/jquery.event.move.js')}}"></script>
    <script src="{{asset('assets/js/jquery.twentytwenty.js')}}"></script>
    <script src="{{asset('assets/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
    <script>
        $(function(){
            $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
            $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});

        });
    </script>


@endpush