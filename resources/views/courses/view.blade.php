@extends('layouts.master')
@section('content') 







<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body " style="font-weight: bold">


            <h2><i class="fa fa-pencil margin-r-5"></i> img</h2>

            <p class="text-muted" ><img src="{{$course['cover_img']}}" class="card-img-top" alt="..."> </p>

            <hr>

             
            

              <h2 style="font-weight:bold"><i class="fa fa-pencil margin-r-5"></i> Name: </h2>
              <p class="text-muted " style="font-size:25px">{{$course['name']}}</p>
              <hr>


              <h2 style="font-weight:bold"><i class="fa fa-pencil margin-r-5"></i> Price: </h2>
              <p class="text-muted " style="font-size:25px">{{$course['price']}}</p>
              <hr>

              <h2 style="font-weight:bold"><i class="fa fa-calender margin-r-5"></i>Start date: </h2>
              <p class="text-muted" style="font-size:25px">{{$course['start_date']}}</p>
              <hr>

              <h2 style="font-weight:bold"><i class="fa fa-pencil margin-r-5"></i>End_date: </h2>
              <p class="text-muted " style="font-size:25px">{{$course['end_date']}}</p>
              <hr>

              <h2 style="font-weight:bold"><i class="fa fa-calender margin-r-5"></i>Teacher Name: </h2>
              <p class="text-muted" style="font-size:25px"></p>
              <hr>

              <h2 style="font-weight:bold"><i class="fa fa-pencil margin-r-5"></i>Supporter Name: </h2>
              <p class="text-muted " style="font-size:25px"></p>
              <hr>
          

              <h2 style="font-weight:bold"><i class="fa fa-file-text-o margin-r-5"></i> Notes</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>



@endsection

