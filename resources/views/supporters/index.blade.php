@extends('layouts.master')
@section('content')
<form action ="/supporter/create">
<div class="container">
  <div class="row">
    <div class="col text-center pt-5 pb-5">
    <button type="submit" class="btn btn-success btn-lg">Create Supporter</button>
    </div>
  </div>
</div>
</form>

<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">national_id</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">avatar_url</th>
      <th scope="col">created_at</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>

    @foreach($supporters as $index => $value) 
    @if(($value['teacher_id']==auth()->user()->id) && ($value['role']=='supporter'))
      <tr>
      <th scope="row">{{$value['id']}}</th>
      <td>{{$value['national_id']}}</td>
      <td>{{$value['name']}}</td>
      <td>{{$value['email']}}</td>
      <td>{{$value['avatar_url']}}</td>
      <td>{{$value['created_at']}}</td>      
      <td>
      @role('admin|teacher')
      <a href="#" class="btn btn-primary">Edit</a>
      <form method="POST" action ="/supporters/{{$value['id']}}/delete">
      @csrf
      @method('DELETE')
      <button onclick="return confirm('Are you sure that you want to delete?')" class="btn btn-danger">
      Delete
      </button>
      </form>
      @endrole
      </td>

      @endif
      @endforeach

  </tbody>
</table>

@endsection





