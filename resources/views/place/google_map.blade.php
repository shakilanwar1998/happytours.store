@extends('layouts.app')
@section('content')
  <style media="screen">
  .gmaps {
      height: 350px;
      width: 100%;
    }
    #google_map {
      height: 600px;
    }

  </style>

  <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Find Places</h3>
                        <p>Find your favourite places in google map</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <div class="card">
      <div class="card-body">
          <div id="google_map" class="gmaps"></div>
      </div>
  </div>
@endsection

@section('scripts')
  <script>
    $(document).ready(function(){
        var map;
        map = new GMaps({
            div: '#google_map',
            lat: 23.777176,
            lng: 90.399452,
            zoom : 7
        });

        @foreach ($places as $key => $value)
          map.addMarker({
            lat: {{$value->lat}},
            lng: {{$value->long}},
            title: "{{$value->name}}",
            infoWindow: {
                content: '<a href="{{url('places/'.$value->id)}}"><p>{{$value->name}}</p><small>{{$value->city->name}}</small></a>'
            }
          });
        @endforeach
    })
  </script>
@endsection
