@extends('layouts.master')
@section('content')
      <!-- general form elements disabled -->
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Course</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form"  method="POST" action='/adminCourses/{{$course->id}}'>
              @csrf
             @method('PUT')
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="{{$course->name}}">
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input type="number" class="form-control" name="price" value="{{$course->price}}">
                </div>

               
                <!-- input states -->
                <div class="form-group">
                  <label class="control-label" for="inputSuccess">Cover_img</label>
                  <input type="file" id="inputSuccess" class="form-control @error('avatar') is-invalid @enderror" value="" name="cover_img">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputWarning">Start_Date</label>
                  <input type="date" class="form-control" id="inputWarning" name="start_date" value="{{$course->start_date}}">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError">End_Date</label>
                  <input type="date" class="form-control" id="inputError" name="end_date" value="{{$course->end_date}}">
                </div>

               

                <!-- select -->
                <div class="form-group">
                  <label>Choose Teacher</label>
                  <select class="form-control" name="teacher">
                  @foreach($teacheres as $teacher)
                   <option value="{{ $teacher->id }}">
                  {{ $teacher->name }}
                  </option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Choose Supporter</label>
                  <select class="form-control"  name="supporter">
                  @foreach($supporteres as $supporter)
                  <option value="{{ $supporter->id }}">
                 {{ $supporter->name }}
                  </option>
                 @endforeach
                   
                  </select>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
        
@endsection