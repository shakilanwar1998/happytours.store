@extends('layouts.app')
@section('content')

      <style media="screen">
      .checked {
          color: orange;
      }

      </style>
      <!-- slider_area_start -->
      <div class="slider_area">
          <div class="slider_active owl-carousel">
              <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                  <div class="container">
                      <div class="row align-items-center">
                          <div class="col-xl-12 col-md-12">
                              <div class="slider_text text-center">
                                  <h3 style="font-size:78px">Find Places in Google map</h3>
                                  <a style="margin-top:10%" href="{{url('map')}}" class="boxed-btn3">Find Now</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- slider_area_end -->

      <!-- where_togo_area_start  -->
      <div class="where_togo_area">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-3">
                      <div class="form_area">
                          <h3>Where you want to go?</h3>
                      </div>
                  </div>
                  <div class="col-lg-9">
                      <div class="search_wrap">

                          <form class="search_form" method="get" action="{{url('/search')}}">
                            {{ csrf_field() }}
                              <div class="input_field" style="width:500px">
                                <input type="search" class="form-control" name="search"
                              placeholder="Search Places">
                              </div>
                              <div class="search_btn">
                                  <button class="boxed-btn4 " type="submit" >Search</button>
                              </div>
                          </form>

                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- where_togo_area_end  -->

      <!-- popular_destination_area_start  -->
      <div class="popular_destination_area">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                      <div class="section_title text-center mb_70">
                          <h3>Popular Cities</h3>
                      </div>
                  </div>
              </div>
              <div class="row">
                @foreach($cities as $key => $value)
                  <?php
                    $images = json_decode($value->images);
                  ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img style="height:220px;" src="{{url($images[0])}}">
                        </div>

                        <div class="content">
                               <p class="d-flex align-items-center"> <a href="">{{ $value->name }}</a>
                             <a href="{{url('city/places/'.$value->id)}}">{{ $value->places->count() }} Places</a> </p>

                        </div>
                    </div>
                </div>
                @endforeach
              </div>
          </div>
      </div>


      <div class="popular_places_area">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                      <div class="section_title text-center mb_70">
                          <h3>Popular Places</h3>
                      </div>
                  </div>
              </div>
              <div class="row">

                @foreach ($popular_places as $key => $value)
                  <?php
                    $images = json_decode($value->images);
                  ?>
                  <div class="col-lg-4 col-md-6">
                      <div class="single_place">
                          <div class="thumb">
                              <img style="height:220px;" src="{{url($images[0])}}">
                          </div>
                          <div class="place_info">
                              <a href="{{url('places/'.$value->id)}}"><h3>{{$value->name}}</h3></a>
                              <p>{{$value->city->name}}</p>
                              <div class="rating_days d-flex justify-content-between">
                                  <span class="d-flex justify-content-center align-items-center">
                                    @if($value->ratings()>=1)
                                    <span class="fa fa-star checked"></span>
                                    @else
                                    <span class="fa fa-star"></span>
                                    @endif

                                    @if($value->ratings()>=2)
                                    <span class="fa fa-star checked"></span>
                                    @else
                                    <span class="fa fa-star"></span>
                                    @endif

                                    @if($value->ratings()>=3)
                                    <span class="fa fa-star checked"></span>
                                    @else
                                    <span class="fa fa-star"></span>
                                    @endif

                                    @if($value->ratings()>=4)
                                    <span class="fa fa-star checked"></span>
                                    @else
                                    <span class="fa fa-star"></span>
                                    @endif

                                    @if($value->ratings()>=5)
                                    <span class="fa fa-star checked"></span>
                                    @else
                                    <span class="fa fa-star"></span>
                                    @endif
                                    <a href="#">({{$value->reviews->count()}} Review)</a>
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>
                @endforeach
              </div>
          </div>
      </div>
@endsection
