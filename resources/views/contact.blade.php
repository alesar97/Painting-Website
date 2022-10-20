@extends('app')
@section("content")

    <section class="contact-area" id="contact">
        <div class="contact-form-area section-padding gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="area-title text-center">
                            <h3>GET IN TOUCH</h3>
                            <p>Need any help jusct send a message via our email address</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <form action="{{route('contact.store')}}" id="contact-form" method="post">
                                <div class="row">
                                    @csrf
                                    {{--<input type="hidden" name="_token" id="_token_val" value="{{csrf_token()}}">--}}

                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="name-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="form-name" name="name" placeholder="Name.." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="email-field">
                                            <div class="form-input">
                                                <input type="email" class="form-control" id="form-email" name="email" placeholder="Email.." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group" id="phone-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="form-subject" name="subject" placeholder="Subject.."  required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group" id="message-field">
                                            <div class="form-input">
                                                <textarea class="form-control" rows="6" id="form-message" name="message" placeholder="Your Message Here..." required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="contact-image">
                            <div class="contact-address">

                                <p> Our : <a href="tel:0466961561">0466961561</a></p>
                                <p>Email: <a href="mailto:{{setting('site.email')}}"> {{setting('site.email')}} </a></p>
                                <p>Info : <a href="mailto:{{setting('site.info_email')}}"> {{setting('site.info_email')}} </a></p>
                                <p>Quote : <a href="mailto:{{setting('site.quote_email')}}"> {{setting('site.quote_email')}} </a></p>
                                <address>
                                    Location  :  moriset NSW 2264
                                </address>
                            </div>
                            <div class="social-bookmark">
                                <h4>Follow Us </h4>
                                <ul>
                                    <li><a href="{{setting('site.facebook')}}"><i class="fa fa-facebook"></i></a></li>


                                    <li><a href="{{setting('site.instagram')}}"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="{{setting('site.hipages')}}"><img src="{{asset('assets/img/hipages.png')}}" width="70%" height="70%" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-area relative" style="padding: 10px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d428796.06498440227!2d151.33896438921442!3d-32.89898106051806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x574988ecde9654ce!2sOur%20painting%20and%20decorating!5e0!3m2!1sen!2sus!4v1603784435350!5m2!1sen!2sus" width="95%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>

@endsection
@push('myjs')

    <script>
        $(function () {

            $('#contact-form').submit(function (e) {

                e.preventDefault();

                $("#book_now").html('Sending..');


                $.ajax({

                    data: $('#contact-form').serialize(),

                    url: "{{ route('contact.store') }}",

                    type: "POST",

                    dataType: 'json',

                    success: function (data) {
                        $("#book_now").html("Send");
                        $("#_token_val").val('{{csrf_token()}}');




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
                        $("#_token_val").val('{{csrf_token()}}');
                        console.log('Error:', data);


                    }

                });

            });
        });
    </script>
    @endpush