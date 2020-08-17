@extends('admin.layouts.adminlayout')
@section('content')
  <div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted">Countries</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1 text-primary">{{App\Models\Country::count()}}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted">Cities</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1 text-primary">{{App\Models\City::count()}}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted">Places</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1 text-primary">{{App\Models\Place::count()}}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted">Reviews</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1 text-primary">{{App\Models\Review::count()}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
