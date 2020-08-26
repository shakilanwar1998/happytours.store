<div class="card">
<h5 class="card-header row">
  <div class="col-md-10">
    {{$page_title}}
  </div>
  <div class="col-md-2">
    <a href="{{url()->current().'/add'}}"><button type="button" name="button" class="btn btn-primary btn-xs">Add {{$page_title}}</button></a>
  </div>
</h5>
  <div class="card-body">
      <table class="table table-bordered">
          <thead>
              <tr>
                <th scope="col">Serial</th>
                @foreach($table_columns as $key => $column)
                  <th scope="col">{{$key}}</th>
                @endforeach
                <th scope="col">Action</th>
              </tr>
          </thead>
          <tbody>
            @foreach($results as $key => $row)
              <tr>
                  <th scope="row">1</th>
                  @foreach($table_columns as $key => $column)
                    <td scope="col">{{$row->$column}}</td> 
                  @endforeach
                  <td>
                    @if($sub_module)
                      <a href="{{url("admin/".$sub_module."/add?parent=".$row->id)}}"><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add {{$sub_module}}</button></a>
                    @endif
                    <a href="{{url()->current().'/details/'.$row->id}}"><button type="button" class="btn btn-primary btn-xs"><i class="far fa-eye"></i></button></a>
                    <a href="{{url()->current().'/edit/'.$row->id}}"><button type="button" class="btn btn-success btn-xs"><i class="fas fa-edit"></i></button></a>
                    <a href="{{url()->current().'/delete/'.$row->id}}"><button type="button" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i></button></a>
                  </td>
              </tr>
            @endforeach
          </tbody>
      </table>
  </div>
</div>
