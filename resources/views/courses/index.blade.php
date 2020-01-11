@extends('layouts.master')
@section('content')   
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>price</th>
                  <th>techer_id</th>
                  <th>Supporter_id</th>
                </tr>

                @foreach($courses as $index => $course)
                <tr>
                  <td>{{$course['id']}}</td>
                  <td>{{$course['name']}}</td>
                  <td>{{$course['price']}}</td>
                  <td>{{$course['techer_id']}}</td>
                  <td>{{$course['supporter_id']}}</td>
                 
                </tr>
                
                
        @endforeach
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    <div style="width:15%;margin:auto;">
        {{$courses->links()}}
    </div>
    @endsection
    <!-- /.content -->
  
  


