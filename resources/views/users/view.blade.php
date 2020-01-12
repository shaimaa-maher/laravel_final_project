@extends('layouts.master')
@section('content') 






<!-- <div class="container">
<div class="card">
<div class="card-header">

  <img src="{{$user['avatar_url']}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title"> National id:</h3>
    <p class="card-text">{{$user['national_ia']}}</p>
  </div>
  <div class="card-body">
    <h3 class="card-title"> Name:</h3>
    <p class="card-text">{{$user['name']}}</p>
  </div>
  <div class="card-body">
    <h3 class="card-title"> Email: </h3>
    <p class="card-text">{{$user['email']}}</p>
  </div>
  <div class="card-body">
    <h3 class="card-title"> Role:</h3>
    <p class="card-text">{{$user['role']}}</p>
  </div>
    </div>
</div>


</div> -->



<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body " style="font-weight: bold">


            <h2><i class="fa fa-pencil margin-r-5"></i> img</h2>

            <p class="text-muted" ><img src="{{$user['avatar_url']}}" class="card-img-top" alt="..."> </p>

            <hr>

              <h2 style="font-weight:bold"><i class="fa fa-book margin-r-5"></i> National id</h2>
              <p class="text-muted">{{$user['national_id']}}</p>
             <hr>

            

              <h2 style="font-weight:bold"><i class="fa fa-pencil margin-r-5"></i> Name</h2>

              <p class="text-muted " style="font-size:25px">{{$user['name']}}</p>

              <hr>

              <h2 style="font-weight:bold"><i class="fa fa-pencil margin-r-5"></i>Email </h2>

              <p class="text-muted " style="font-size:25px">{{$user['email']}}</p>


              <hr>
              <h2 style="font-weight:bold"><i class="fa fa-pencil margin-r-5"></i>Role </h2>

                <p class="text-muted" style="font-size:25px">{{$user['role']}}</p>


                <hr>

              <h2 style="font-weight:bold"><i class="fa fa-file-text-o margin-r-5"></i> Notes</h2>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>



@endsection

