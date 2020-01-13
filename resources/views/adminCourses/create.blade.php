@extends('layouts.master')
@section('content')

    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Create New Course</h3>
        </div>
        <div class="box-body">
            <form role="form" method="post" action="{{url('/adminCourses')}}">
            @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" name="price">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputSuccess">Cover_img</label>
                    <input type="file" class="form-control" id="inputSuccess" name="cover_img">
                    @error('cover_img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputWarning">Start_Date</label>
                <input type="date" class="form-control" id="inputWarning" name="start_date">
                </div>
                <div class="form-group">
                    <label class="control-label" for="inputError">End_Date</label>
                    <input type="date" class="form-control" id="inputError" name="end_date">
                </div>
                <div class="form-group">
                    <label>Choose Teacher</label>
                    <div class="input-group mb-3">
                        <select class="form-control" id="inputGroupSelect04" name="teacher">
                        @foreach($users as $user)
                            @if($user['role']!='supporter')
                                <option>{{$user['id']}}</option>
                            @endif
                        @endforeach
                        </select>
                        <div class="input-group-addon">
                            <span class="fa fa-plus" </span>
                         </div> 
                    </div> 
                </div> 
                <div class="form-group">
                    <label>Choose Supporter</label>
                    <div class="input-group mb-3">
                        <select class="form-control" id="inputGroupSelect04" name="supporter">
                        @foreach($users as $user)
                            @if($user['role']!='teacher')
                                <option>{{$user['id']}}</option>
                            @endif
                        @endforeach
                        </select>
                        <div class="input-group-addon">
                            <span class="fa fa-plus" </span> 
                        </div> 
                    </div> 
                </div> 
                <div class="panel-footer">
                    <button type="submit" class="btn btn-warning">Create</button>
                </div>
            </form>
        </div>

    @endsection