@extends('layouts.master')
@section('content')
<form action ="/teacher/create">
<div class="container">
  <div class="row">
    <div class="col text-center pt-5 pb-5">
    <button type="submit" class="btn btn-success btn-lg">New course</button>
    </div>
  </div>
</div>
</form>

<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Cover_img</th>
      <th scope="col">Start_date</th>
      <th scope="col">End_date</th>
      <th scope="col">teacher_id</th>
      <th scope="col">Supporter_id</th>
      <th scope="col">Created_at</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>

    @foreach($courses as $index => $value) 
      <tr>
      <th scope="row">{{$value['id']}}</th>
      <td>{{$value['name']}}</td>
      <td>{{$value['price']}}</td>
      <td>{{$value['cover_img']}}</td>
      <td>{{$value['start_date']}}</td>
      <td>{{$value['end_date']}}</td>      
      <td>{{$value['teacher_id']}}</td>
      <td>{{$value['supporter_id']}}</td>
      <td>{{$value['created_at']}}</td>
      <td>
      <a class="btn  btn-success" href="{{route('teacher.view',['course' => $value['id'] ])}}"> View</a>
      @role('admin|teacher')
      <a class="btn  btn-primary" >Edit</a>
      <form method="POST" action ="/courses/{{$value['id']}}/delete">
      @csrf
      @method('DELETE')
      <button onclick="return confirm('Are you sure that you want to delete?')" class="btn btn-danger">
      Delete
      </button>
      </form>
      @endrole
      </td>
      @endforeach

  </tbody>
</table>

@endsection





