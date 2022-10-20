@extends('app')
@section("content")

    <section class="contact-area" id="contact">
        <div class="contact-form-area section-padding gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="area-title text-center">
                            <h3>GET A AUOTE</h3>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">

                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <form action="{{url('get-quote')}}" id="contact-form" method="post">
                                @csrf
                                <div class="row">
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
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="name-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="form-phone" name="phone" placeholder="Phone.." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="form-group" id="email-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="job_type" name="job_type" placeholder="Type.." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group" id="email-field">
                                            <div class="form-input">
                                                <input type="text" class="form-control" id="budget" name="budget" placeholder="Budget.." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group" id="message-field">
                                            <div class="form-input">
                                                <textarea class="form-control" rows="6" id="form-message" name="message" placeholder="Your Job Details..." required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" id="book_now">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">

                    </div>
                </div>
            </div>
        </div>
        <div class="map-area relative">

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