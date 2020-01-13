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
                  <th>Email</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>

                @foreach($users as $index => $user)
                <tr>
                  <td>{{$user['id']}}</td>
                  <td>{{$user['name']}}</td>
                  <td>{{$user['email']}}</td>
                  <td>{{$user['role']}}</td>
                  <td>
                  <a href="{{ route('users.show',['user' => $user['id']]) }}"class="btn btn-success text-light " >View </a>
                  <a  href="{{ route('users.edit',['user' => $user['id']]) }}" class="btn btn-info text-light ">Edit</a>

                  @if(!(auth()->user()->id == $user['id']))
                    
                  <form method="post" action="{{route('users.destroy',['user' => $user['id'] ])}}" style="display: inline-block">
                @csrf
                @method('delete')   
               
                <button onclick="return confirm('Are You Sure You Want To delete')" class="btn bg-danger" type="submit">Delete</button>
            </form>
            @endif
                  </td>
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
        {{$users->links()}}
    </div>
    @endsection
    <!-- /.content -->
  
  


