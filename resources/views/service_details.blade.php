@extends('app')
@section("content")


    <!--SERVICE AREA-->
    <section class="service-area-two section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 pull-right">
                    <div class="service-details-content">
                      {!! $services->details !!}
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-left">
                    <div class="service-menu">
                        <h4> Our Services </h4>
                        <ul>
                            @if(count($all) > 0)
                                @foreach($all as  $item)
                            <li><a href="{{route('service.details',["id"=>$item->id])}}"> {{$item->name}}  <i class="fa fa-angle-right"></i></a></li>
                            @endforeach
                                @endif
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SERVICE AREA END-->


@endsection
@push('myjs')
    <script>
        $(function(){

            $("img").elevateZoom({
                zoomType				: "inner",
                cursor: "crosshair"
            });
        });
    </script>
    @endpush