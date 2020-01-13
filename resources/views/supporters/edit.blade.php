@extends('layouts.master')

@section('content')
<h1>Edit Supporter</h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="/supporter/{{$supporter['id']}}">
    @csrf
    <div class="form-group">

        <label>national_id</label>
        <input type="text" name="national_id" class="form-control" value="{{$supporter->national_id}}" required>
        <label>name</label>
        <input type="text" name="name" class="form-control" value="{{$supporter->name}}" required>
        <label>email</label>
        <input type="email" class="form-control" name="email" value="{{$supporter->email}}" required>
        <label>password</label>
        <input type="password" name="password" class="form-control" value="{{$supporter->password}}" required>
        <label>avatar_url</label>
        <input type="file" name="avatar_url" accept=".jpg,.png,.jpeg" class="form-control" value="{{$supporter->avatar_url}}" required>
        <label>course_id</label>
        <input type="text" name="course_id" class="form-control" value="{{$supporter->course_id}}" required>
    </div>


    <button type="submit" class="btn btn-primary">confirm</button>
    @method('patch')
</form>
@endsection