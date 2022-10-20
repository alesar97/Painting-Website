@extends('app')
@section("content")

    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/css/lightgallery.min.css"   />
    <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
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
            <!-- Hidden video div -->
                <div style="display:none;" id="video{{$item->id}}">
                    @if(json_decode($item->video) !== null)
                        @foreach(json_decode($item->video) as $file)
                            <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                                <source src="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>

                        @endforeach
                    @else
                        <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                            <source src="{{ Storage::disk(config('voyager.storage.disk'))->url($item->video) }}" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>

                    @endif

                </div>

            @endforeach
            <ul id="video-gallery">
                @foreach($images as $item)
                <li data-poster="{{Voyager::image($item->image)}}" data-sub-html="video caption1" data-html="#video{{$item->id}}" class="col-md-6" >
                    <img src="{{Voyager::image($item->image)}}" style="width: 50%;height: 300px;" />
                </li>
                    @endforeach

            </ul>
        </div>
    </section>
    <!--SERVICE AREA END-->

@endsection
@push('myjs')

    <script src="{{asset('assets/js/lightgallery-all.js')}}"></script>
    <script src="http://vjs.zencdn.net/4.12/video.js"></script>

    <script>
        $(function () {
            $('#video-gallery').lightGallery();
        });
    </script>

@endpush