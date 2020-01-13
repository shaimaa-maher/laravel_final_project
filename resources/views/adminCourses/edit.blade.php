@extends('layouts.master')
@section('content')
      <!-- general form elements disabled -->
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Create New Course</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input type="number" class="form-control">
                </div>

               
                <!-- input states -->
                <div class="form-group">
                  <label class="control-label" for="inputSuccess">Cover_img</label>
                  <input type="file" class="form-control" id="inputSuccess">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputWarning">Start_Date</label>
                  <input type="date" class="form-control" id="inputWarning">
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputError">End_Date</label>
                  <input type="date" class="form-control" id="inputError">
                </div>

               

                <!-- select -->
                <div class="form-group">
                  <label>Choose Teacher</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Choose Supporter</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>

              </form>
            </div>
            <!-- /.box-body -->
        
@endsection