@extends('layouts.app')
@section('content')
    <div class="destination_banner_wrap overlay">
        <div class="destination_text text-center">
            <h3>{{$place->name}}</h3>
            <p>{{$place->subtitle}}</p>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                  <div class="card" style="max-width: fit-content;">
                    <div class="card-body">
                      <iframe id="map_iframe"
                        width="640"
                        height="320"
                        frameborder="0"
                        scrolling="yes"
                        marginheight="0"
                        marginwidth="0"
                        src ="https://maps.google.com/maps?q={{$place->lat}},{{$place->long}}&hl=en&z=14&amp;output=embed"
                        href = "https://maps.google.com/maps?q={{$place->lat}},{{$place->long}}&hl=en;z=14&amp;output=embed"
                       >
                       </iframe>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="destination_info">
                        <h3>Description</h3>
                        {!! $place->description !!}
                    </div>
                    <div class="bordered_1px"></div>
                    <div class="contact_join">
                        <h3>Write a Review</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single_input">
                                        <input type="text" placeholder="Phone no.">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <textarea name="" id="" cols="30" rows="10"placeholder="Message" ></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="submit_btn">
                                        <button class="boxed-btn4" type="submit">submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
