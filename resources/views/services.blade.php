@extends('app')
@section("content")


    <section class="service-area-three section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Our Service</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $item)
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service-three wow fadeInUp" data-wow-delay=".2s">
                        <div class="service-icon-three"> <img src="{{Voyager::image($item->image)}}" alt="" style="
    margin: 8px;
">  </div>
                        <h4>  {{$item->name}} </h4>
                        <p>
                            <a href="{{route('service.details',["id"=>$item->id])}}" class="read-more">Read More</a>
                        </p>
                    </div>
                </div>
                    @endforeach

            </div>
        </div>
    </section>


@endsection
@push('myjs')


    @endpush