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
              <h3 class="box-title">Create New Course</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action ="/courses/course">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" name="name"  class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Price</label>

                  <div class="col-sm-10">
                    <input type="number" name="price" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword4" class="col-sm-2 control-label">Cover_img</label>

                  <div class="col-sm-10">
                  <input type="file" class="form-control" id="inputSuccess" name="cover_img">
                    @error('cover_img')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Start_date</label>

                  <div class="col-sm-10">
                  <input type="date" class="form-control" id="inputWarning" name="start_date">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">End_date</label>

                  <div class="col-sm-10">
                  <input type="date" class="form-control" id="inputError" name="end_date">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Choose Supporter</label>

                  <div class="col-sm-10">
                  <select class="form-control" id="inputGroupSelect04" name="supporter_id">
                        @foreach($users as $user)
                            @if($user['role']!='teacher' && $user['teacher_id']==NULL)
                                <option>{{$user['id']}}</option>
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