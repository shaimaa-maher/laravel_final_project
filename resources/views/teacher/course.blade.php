@extends('layouts.master')
@section('content')
<form action ="/posts/create">
<div class="container">
  <div class="row">
    <div class="col text-center pt-5 pb-5">
    <button type="submit" class="btn btn-success btn-lg">Create Courses</button>
    </div>
  </div>
</div>
</form>

<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">start date</th>
      <th scope="col">end date</th>
    </tr>
  </thead>
  <tbody>

    @foreach($courses as $index => $value) 
      <tr>
      <th scope="row">{{$value['id']}}</th>
      <td>{{$value['name']}}</td>
      <td>{{$value['price']}}</td>
      <td>{{$value['start_date']}}</td>
      <td>{{$value['end_date']}}</td>
      
      @endforeach

  </tbody>
</table>

@endsection





