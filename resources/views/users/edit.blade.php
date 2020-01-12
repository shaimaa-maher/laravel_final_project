@extends('layouts.master')
@section('content')
<div class="container bootstrap snippet">
  <h1 class="text-primary"><span class="glyphicon glyphicon-user"></span>Edit Profile</h1>
  <hr>
  <div class="row">
    <!-- left column -->




    <!-- edit form column -->
    <div class="col-md-6 personal-info">
      <form class="form-horizontal row" role="form" method="POST" action='/users/{{$user->id}}'>
      @csrf
        @method('PUT')
         

      <div class="form-group">
          <label class="col-lg-3 control-label">National id:</label>
          <div class="col-lg-8">
            <p> {{$user->national_id}} </p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Name:</label>
          <div class="col-lg-8">
          <input id="" type="text" name="name" value="{{$user->name}}">

          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
          <input id="" type="email" name="email" value="{{$user->email}}">

          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Role:</label>
          <div class="col-lg-8">
            <p>{{$user->role}}</p>
          </div>
        </div>

        <div class="col-12 text-center">
          <img src="{{$user->avatar_url}}" alt="avatar">
          <h6>Upload a different photo...</h6>
          <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" value="{{$user->avatar_url}}" name="avatar">
        </div>

        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
              submit
            </button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
  <hr>
  @endsection