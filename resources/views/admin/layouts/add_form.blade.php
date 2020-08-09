@extends('admin.layouts.adminlayout')
@section('content')
  <div class="container">
    <div class="card">
      <h5 class="card-header">Add new {{$page_title}}</h5>
      <div class="card-body">
          <form action="{{url()->current().'/save/'}}" method="post" enctype="multipart/form-data">
            @csrf
              @foreach($form_data as $key => $data)
                @if(in_array($data['type'],['text','email','number']))
                  <div class="form-group">
                      <label for="form_{{$data['name']}}" class="col-form-label">{{$data['label']}}</label>
                      <input id="form_{{$data['name']}}" type="{{$data['type']}}" class="form-control" name="{{$data['name']}}" placeholder="Please enter {{$data['label']}}">
                  </div>
                @endif
              @endforeach
              <div class="form-group row">
                <div class="col-md-11">

                </div>
                <div class="col-md-1">
                  <button type="submit" name="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
          </form>
      </div>
    </div>
  </div>
@endsection
