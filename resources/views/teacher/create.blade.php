@extends('layouts.master')
@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action ="/teacher/index" class="pl-5 pt-5">
 @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
    <label >Price</label>
    <input type="text" class="form-control" name = "price" >
    <label>Cover_img</label>
    <input type="file" name="pic" accept=".jpg" class="form-control">
    <label>Start_date</label>
    <input type="date" name="start" class="form-control">
    <label>End_date</label>
    <input type="date" name="end" class="form-control">
    <label>teacher_id</label>
    <input type="text" name="teacherId" class="form-control">
    <label>Supporter_id</label>
    <input type="text" name="supporterId" class="form-control">
  </div>

  <button type="submit" name ="submit" class="btn btn-success">Create</button>

</form>





@endsection