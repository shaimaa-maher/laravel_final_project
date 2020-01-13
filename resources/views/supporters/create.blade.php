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
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Create New Supporter</h3>
            </div>
         
            <form class="form-horizontal" method="POST" action ="/supporters/supporter">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NationalId</label>

                  <div class="col-sm-10">
                  <input type="number" class="form-control" name = "national_id" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                  <input type="text" name="name"  class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword4" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                  <input type="email" name="email" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                  <input type="password" name="password" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Avatar_url</label>

                  <div class="col-sm-10">
                  <input type="file" name="avatar_url" accept=".jpg,.png,.jpeg" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Course_id</label>

                  <div class="col-sm-10">
                  <select class="form-control" id="inputGroupSelect04" name="course_id">
                        @foreach($courses as $course)
                            @if($course['teacher_id']==auth()->user()->id)
                                <option>{{$course['id']}}</option>
                            @endif
                        @endforeach
                        </select>
                  </div>
                </div>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Create</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>





@endsection