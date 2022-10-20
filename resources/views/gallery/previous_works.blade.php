@extends('app')
@section('content')

    <!-- Start Light Box BODY section --> <!-- add to the <body> of your page -->

    <section class="service-area-three section-padding">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
            <div class="area-title text-center">
            <h2> PREVIOUS WORKS </h2>
            </div>
                </div>
            </div>
 
              @if(count($previousWorks) >0)
                    @foreach($previousWorks as $previousWork)
                    <br>
                                
                @php $count =0; @endphp
                
            <h3> {!! $previousWork->title !!} </h3>
       <div class="gallery" style= "margin:10px">
           
                 @if(json_decode($previousWork->images) !== null)
                         @foreach(json_decode($previousWork->images) as $file)
                         
                         
                          @php
                          $count = $count + 1;  
                          if ($count > 3){
                         
                          @endphp
                          
                <div class="gallery-item" style="margin:0px; display:none">
                    <a href="{{Voyager::image($file->download_link)}}" class="lumos-link" data-lumos="demo{!! $previousWork->id !!}">
                        <img class="demo" src="{{Voyager::image($file->download_link)}}"  style="margin:5px">
                    </a>
                </div>
                
                @php
                }elseif ($count == 3){
                @endphp
            
             <div class="gallery-item" style="margin:0px; text-align:center">
                    <a href="{{Voyager::image($file->download_link)}}" class="lumos-link" data-lumos="demo{!! $previousWork->id !!}">
                        <img class="demo" src="{{Voyager::image($file->download_link)}}" style="opacity: 0.2; position: relative; margin:5px">
                        <p class="centered"> +
                        
                        {!! count(json_decode($previousWork->images)) - 2
                         !!} 
                       
                         </p>
                    </a>
                   
                </div>
            
           @php
           } 
           else{
           @endphp
           
                <div class="gallery-item" style="margin:0px">
                    <a href="{{Voyager::image($file->download_link)}}" class="lumos-link" data-lumos="demo{!! $previousWork->id !!}">
                        <img class="demo" src="{{Voyager::image($file->download_link)}}" style="margin:5px">
                    </a>
                </div>
          
          @php
          }
          @endphp
                         
                      @endforeach
                  @endif
                  
          @php
          $count= 0;
          @endphp
          
        </div>
             
               @endforeach
            @endif
            
            </div>
    </section>

    <!-- End Light Box BODY section -->
@endsection
