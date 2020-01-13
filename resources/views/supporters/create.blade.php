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

<form method="POST" action ="/supporters/supporter" class="pl-5 pt-5">
 @csrf

<div class="form-group">
    <label >national_id</label>
    <input type="text" class="form-control" name = "national_id" >

    <label>name</label>
    <input type="text" name="name"  class="form-control">

    <label>email</label>
    <input type="email" name="email" class="form-control">

    <label>password</label>
    <input type="password" name="password" class="form-control">

    <label>avatar_url</label>
    <input type="file" name="avatar_url" accept=".jpg,.png,.jpeg" class="form-control">

    <label>course_id</label>
    <input type="text" name="course_id" class="form-control">
</div>


  <button type="submit" name ="submit" class="btn btn-success">Create</button>

</form>





@endsection