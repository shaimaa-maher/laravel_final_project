@extends('layouts.master')
@section('content')
<form action ="/course/create">
<div class="container">
  <div class="row">
    <div class="col text-center pt-5 pb-5">
    @role('admin|teacher')
    <button type="submit" class="btn btn-success btn-lg">New course</button>
    @endrole

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
      <th scope="col">Supporter_id</th>
      <th scope="col">Created_at</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>

    @foreach($courses as $index => $value) 
    @if($value['teacher_id']==auth()->user()->id)
      <tr>
      <th scope="row">{{$value['id']}}</th>
      <td>{{$value['name']}}</td>
      <td>{{number_format(($value['price'] /100), 2, '.', ' ')}}</td>
      <td>{{$value['cover_img']}}</td>
      <td>{{$value['start_date']}}</td>
      <td>{{$value['end_date']}}</td>      
      <td>{{$value['supporter_id']}}</td>
      <td>{{$value['created_at']}}</td>
      <td>
      <a class="btn  btn-success" href="{{route('course.view',['course' => $value['id'] ])}}"> View</a>

      @role('admin|teacher')
      <a href="{{route('course.edit',['course' => $value['id'] ])}}" class="btn btn-primary">Edit</a>     
       <form action="{{route('course.destroy',['course' => $value['id'] ])}}" method="post">
          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
          @method("delete")
          @csrf
        </form>


     
      @endrole
      </td>
      @endif
      @endforeach

  </tbody>
</table>

@endsection





