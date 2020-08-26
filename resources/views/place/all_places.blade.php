@extends('layouts.app')
@section('content')

<div class="popular_places_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>All Places</h3>
                </div>
            </div>
        </div>
         <div class="row">
           @foreach ($place as $key => $value)
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
