@extends('layouts.master')
@section('content')

<div class="card mt-5">
  <div class="card-header">
    Course Info
  </div>
  <div class="card-body">
    <h5 class="card-title"> name:-</h5>
    <span class="card-text">{{$course['name']}}</span>
    <h5 class="card-title"> price:-</h5>
    <span class="card-text">{{number_format(($course['price'] /100), 2, '.', ' ')}}</span>
  </div>
</div>


@endsection