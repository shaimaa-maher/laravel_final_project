@extends('layouts.master')
@section('content') 
<div style="width: 80%;margin:auto">
<div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-circle" src="{{$course['cover_img']}}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">{{$course['name']}}</h3>
              <h5 class="widget-user-desc">{{$course['price']}}</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Start_date<span class="pull-right badge bg-blue">{{$course['start_date']}}</span></a></li>
                <li><a href="#">End_date<span class="pull-right badge bg-aqua">{{$course['end_date']}}</span></a></li>
              </ul>
            </div>
          </div>
</div>
</div>

           
         

@endsection
