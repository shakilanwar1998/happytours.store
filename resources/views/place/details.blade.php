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
                    <div class="comments-area">
                  <h4>{{$place->reviews->count()}} Reviews</h4>
                  @foreach ($place->reviews as $key => $value)
                    <div class="comment-list">
                       <div class="single-comment justify-content-between d-flex">
                          <div class="user justify-content-between d-flex">
                             <div class="thumb">

                             </div>
                             <div class="desc">
                                <p class="comment">
                                   {{$value->comment}}
                                </p>

                                  @if($value->rating_stars>=1)
                                  <span class="fa fa-star checked"></span>
                                  @else
                                  <span class="fa fa-star"></span>
                                  @endif

                                  @if($value->rating_stars>=2)
                                  <span class="fa fa-star checked"></span>
                                  @else
                                  <span class="fa fa-star"></span>
                                  @endif

                                  @if($value->rating_stars>=3)
                                  <span class="fa fa-star checked"></span>
                                  @else
                                  <span class="fa fa-star"></span>
                                  @endif

                                  @if($value->rating_stars>=4)
                                  <span class="fa fa-star checked"></span>
                                  @else
                                  <span class="fa fa-star"></span>
                                  @endif

                                  @if($value->rating_stars>=5)
                                  <span class="fa fa-star checked"></span>
                                  @else
                                  <span class="fa fa-star"></span>
                                  @endif

                                <div class="d-flex justify-content-between">
                                   <div class="d-flex align-items-center">
                                      <h5>
                                         <a href="#">{{$value->user->name}}</a>
                                      </h5>
                                      <p class="date">{{date('m/d/Y H:i:s',strtotime($value->created_at))}}</p>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                  @endforeach
               </div>

                    @if(\Auth::Id())
                    <div class="contact_join">
                        <h3>Write a Review</h3>
                        <form action="{{url('places/submit_review/'.$place->id)}}" method="post">
                          @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="single_input">
                                        <textarea cols="30" rows="10"placeholder="Message" name="comment"></textarea>
                                    </div>
                                    <div class="rating">
                                        <input type="radio" name="rating" value="5" id="5">
                                        <label for="5">☆</label>
                                        <input type="radio" name="rating" value="4" id="4">
                                        <label for="4">☆</label>
                                        <input type="radio" name="rating" value="3" id="3">
                                        <label for="3">☆</label>
                                        <input type="radio" name="rating" value="2" id="2">
                                        <label for="2">☆</label>
                                        <input type="radio" name="rating" value="1" id="1">
                                        <label for="1">☆</label>
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
                  @else
                    Please <a style="color:blue" href="{{route('login')}}">Login</a> to write a review
                  @endif

                </div>

                {{-- <div class="col-md-3">
                  <h3>Nearby resturants</h3>
                      <div class="card-body">
                          <div class="list-group" id="nearby_resturants">
                              <a href="#" class="list-group-item"> Cras justo odio </a>
                          </div>
                      </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div id="google_map">

    </div>
@endsection

@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
      // nearbyHotels();
      // nearbyResturants();
    });

    function nearbyResturants(){
      var map;
      var map = new google.maps.Map(document.getElementById('google_map'), {
          center: { lat: 25.276987, lng: 55.296249 },
          zoom: 15
      });

      var myPlace = {lat: {{$place->lat}}, lng: {{$place->long}} };

      var service = new google.maps.places.PlacesService(map);

          service.nearbySearch({
              location : myPlace,
              radius : 5500,
              type : [ 'restaurant' ]
          }, restaurantCallback);
    }

    function nearbyHotels(){

    }

    function restaurantCallback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            for (var i = 0; i < results.length; i++) {
                console.log(results[i]);
            }
        }
    }

  </script>
@endsection
