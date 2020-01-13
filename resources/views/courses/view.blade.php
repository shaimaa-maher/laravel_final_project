@extends('layouts.master')
@section('content')
<!-- <div style="60%;margin:auto"> -->
  <div class="row">
    <div class="col-6 m-3">
      <div class="card">
        <div class="card-header">
          Course info
        </div>
        <div class="card-body">
          <p>
            <span class="font-weight-bold">Course name:</span>
            <span class="card-text"> {{$course['name']}} </span>
          </p>
          <p>
            <span class="font-weight-bold">Price:</span>
            <span class="card-text"> {{$course['price']}}</span>
          </p>
          <p>
            <span class="font-weight-bold">Start date:</span>
            <span class="card-text"> {{$course['start_date']}}</span>
          </p>
          <p>
            <span class="font-weight-bold">End date:</span>
            <span class="card-text"> {{$course['end_date']}}</span>
          </p>
        </div>
      </div>
    </div>
  </div>
<!-- </div> -->

@endsection