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
                  <th>teacher Name</th>
                  <th>Supporter Name</th>

                </tr>

                @foreach($courses as $index => $course)
                <tr>
                  <td>{{$course['id']}}</td>
                  <td>{{$course['name']}}</td>
                  <td>{{$course['price']}}</td>
                  <td>{{$course['teacher_id']}}</td>
                  <td>{{$course['supporter_id']}}</td>
                  <td>{{$course['teacher_name']}}</td>
                  <td>{{$course['supporter_name']}}</td>
                  <td>
                    <a href="{{ route('adminCourses.show',['course' => $course['id']]) }}"class="btn btn-success text-light " >View </a>
                    <a  href="{{ route('adminCourses.edit',['course' => $course['id']]) }}" class="btn btn-info text-light ">Edit</a>
                    <form method="post" action="{{route('adminCourses.destroy',['course' => $course['id'] ])}}" style="display: inline-block">
                      @csrf
                      @method('delete')   
               
                <button onclick="return confirm('Are You Sure You Want To delete')" class="btn bg-danger" type="submit">Delete</button>
            </form>
                  </td>
                 
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
  
  


