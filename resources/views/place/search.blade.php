@extends('layouts.app')
@section('content')
<div class="container">
    @if(isset($places))
    <h2>Place Details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Place Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($places as $place)
            <tr>
                <td>{{$place->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>



@endsection
