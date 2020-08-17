@extends('layouts.app')
@section('content')

    <style media="screen">
    .rating {
    display: flex;
    flex-direction: row-reverse;
    justify-content: center
    }

    .rating>input {
        display: none
    }

    .rating>label {
        position: relative;
        width: 1em;
        font-size: 3vw;
        color: #FFD600;
        cursor: pointer
    }

    .rating>label::before {
        content: "\2605";
        position: absolute;
        opacity: 0
    }

    .rating>label:hover:before,
    .rating>label:hover~label:before {
        opacity: 1 !important
    }

    .rating>input:checked~label:before {
        opacity: 1
    }

    .rating:hover>input:checked~label:before {
        opacity: 0.4
    }

    .checked {
        color: orange;
    }

    </style>
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
                    

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
