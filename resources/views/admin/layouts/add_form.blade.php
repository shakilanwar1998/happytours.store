@extends('admin.layouts.adminlayout')
@section('content')
  <div class="container">
    <div class="card">
      <h5 class="card-header">Add new {{$page_title}}</h5>
      <div class="card-body">
          <form action="{{url()->current().'/save/'}}" method="post" enctype="multipart/form-data">
            @csrf
              @foreach($form as $key => $data)
                @if(in_array($data['type'],['text','email','number']))
                  <div class="form-group">
                      <label for="form_{{$data['name']}}" class="col-form-label">{{$data['label']}}</label>
                      <input id="form_{{$data['name']}}" type="{{$data['type']}}" class="form-control" name="{{$data['name']}}" placeholder="Please enter {{$data['label']}}" required="{{$data['required']}}">
                  </div>
                @endif

                @if(in_array($data['type'],['textarea']))
                  <div class="form-group">
                      <label for="form_{{$data['name']}}" class="col-form-label">{{$data['label']}}</label>
                      <textarea id="form_{{$data['name']}}" class="form-control summernote" name="{{$data['name']}}" placeholder="Please enter {{$data['label']}}" required="{{$data['required']}}"></textarea>
                  </div>
                @endif

                @if(in_array($data['type'],['file','upload']))
                  <div class="form-group">
                      <label for="form_{{$data['name']}}" class="col-form-label">{{$data['label']}}</label>
                      <div class="file_forms">
                        <div class="custom-file">
                            <input type="file" name="{{$data['name']}}[]" class="custom-file-input" multiple required="{{$data['required']}}">
                            <label class="custom-file-label" for="form_{{$data['name']}}">Upload {{$data['label']}}</label>
                        </div>
                      </div>
                  </div>
                  <div class="container">
                    <div class="file_preview">

                    </div>
                  </div>
                @endif

                @if(in_array($data['type'],['checkbox']))
                  <div class="form-group">
                      <label for="form_{{$data['name']}}" class="col-form-label">{{$data['label']}}</label>
                      <div class="custom-file">
                          <input type="file" name="{{$data['name']}}" class="custom-file-input" id="form_{{$data['name']}}" onchange="" required="{{$data['required']}}">
                          <label class="custom-control custom-checkbox">
                              <input type="checkbox" checked="" class="custom-control-input"><span class="custom-control-label">Default Checkbox</span>
                          </label>
                      </div>
                  </div>
                @endif

                @if(in_array($data['type'],['select']))
                  <div class="form-group">
                      <label for="form_{{$data['name']}}" class="col-form-label">{{$data['label']}}</label>
                      <select id="form_{{$data['name']}}" class="form-control" name="{{$data['name']}}" placeholder="Please enter {{$data['label']}}" required="{{$data['required']}}">
                        @if(isset($data['model']))
                        @foreach ($data['model']->all() as $key => $value)
                          @if(isset($_GET['parent']) && $value->id == $_GET['parent'])
                            <option value="{{$value->id}}" selected>{{$value->name}}</option>
                          @else
                            <option value="{{$value->id}}">{{$value->name}}</option>
                          @endif
                        @endforeach
                        @endif
                      </select>
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

@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
      $('input[type=file]').change(function(){
        var length = this.files.length;
        $('.file_preview').append('<img src="'+window.URL.createObjectURL(this.files[length-1])+'" style="width:200px;padding:10px">');
      });
    });
  </script>
@endsection
