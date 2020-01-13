
@extends('layouts.master')
@section('content')

<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
     <div class="box-body">
         <form role="form"  method="POST" action='/users'>
         @csrf
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Your name...">
                </div>

                <div class="form-group">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Email-Address</label>
                  <input type="email" class="form-control" name="email" id="inputSuccess" placeholder="Enter Your Email ...">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Enter ..." >
                </div>

                <div class="form-group ">
                  <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i>Confirm Password</label>
                  <input type="password"  class="form-control" id="inputWarning" placeholder="Enter ...">
                </div>

                <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">Upload Your Avatar</label>

                            <div class="col-md-10">
                                <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar">

                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                </div>

                <!-- radio -->
                <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="role" id="optionsRadios1" value="teacher" checked>
                      teachet
                    </label>
                  </div>

                  <div class="radio">
                    <label>
                      <input type="radio" name="role" id="optionsRadios1" value="supporter" >
                        Supporter
                    </label>
                  </div>
                 
                </div>

                <div class="form-group row mb-0">
                     <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                          Register
                        </button>
               </div>
      


         </form>
     </div>
            <!-- /.box-body -->
 </div>
          @endsection