@extends('layouts.master')
@section('content')
<div class="container bootstrap snippet">
  <h1 class="text-primary"><span class="glyphicon glyphicon-course"></span>Edit Profile</h1>
  <hr>
  <div class="row">
    <!-- left column -->




    <!-- edit form column -->
    <div class="col-md-6 personal-info">
      <form class="form-horizontal row" role="form" method="POST" action='/courses/{{$course->id}}'>
      @csrf
        @method('PUT')
         

     

        <div class="form-group">
          <label class="col-lg-3 control-label">Name:</label>
          <div class="col-lg-8">
          <input id="" type="text" name="name" value="{{$course->name}}">

          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Price:</label>
          <div class="col-lg-8">
          <input id="" type="text" name="price" value="{{$course->price}}">

          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Start_date:</label>
          <div class="col-lg-8">
          <input id="" type="text" name="start_date" value="{{$course->start_date}}">

          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">End date:</label>
          <div class="col-lg-8">
          <input id="" type="text" name="end_date" value="{{$course->end_date}}">

          </div>
        </div>
        <div class="form-group">
          <select name="teacher_id" class="form-control">
            <option>Select teacher</option><!--selected by default-->
             @foreach($teacheres as $teacher)
            <option value="{{$teacher->id }}">
                 {{ $teacher->name }}
            </option>
             @endforeach
        </select>
      </div>
      <div class="form-group">
          <select name="supporter_id" class="form-control">
            <option>Select Supporter</option><!--selected by default-->
             @foreach($supporteres as $supporter)
            <option value="{{$supporter->id}}">
                 {{$supporter->name }}
            </option>
             @endforeach
        </select>
      </div>
      

        <div class="col-12 text-center">
          <img src="../../../public/bower_components/AdminLTE/dist/img/{{$course->cover_img}}" alt="avatar">
          <h6>Upload a different photo...</h6>
          <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" value="" name="cover_img">
        </div>

        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
              Update
            </button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
  <hr>
  @endsection


