@extends('layout.app')
@section('content')
<div class="container pb-100 pt-100">
	@if($notifications)
	@foreach($notifications as $notify)
   <div class="row notify border">
      <div class="col-xs-3 col-md-3">
         <div class="cab-num">
            <h4>{{$notify['vehicle_no']}}</h4>
         </div>
      </div>
      <div class="col-xs-6  col-md-6">
         <div class="cab-info">
            <h4>{{$notify['fname']}} {{$notify['lname']}}</h4>
            <h5 class="d-none"> <i class="fa fa-phone-volume"></i> Phone Number :  +91823646577</h5>
            <h1><i class="fa fa-rupee-sign"></i>{{$notify['payment']}}</h1>
         </div>
      </div>
      <div class="col-xs-3  col-md-3">
         <div class="vehi-icon">
            <a href="{{url('notifications/accept').'/'.$notify['id']}}" class="btn my-2  btn-secondary d-block">Accept</a>
            <a href="{{url('notifications/skip').'/'.$notify['id']}}" class="btn btn-primary d-block">Skip</a>
         </div>
      </div>
   </div>
   @endforeach
   @else
	<div class="row border p-5">
		<div class="col-md-3 font-weight-bold m-auto text-warning text-center p-1">
			<img src="{{url('public/front-assets/images/no-notification.png')}}" height="50" />
			<h4 class="mt-3">No Notifications Available</h4>
		</div>
	</div>
   @endif
</div>
@endsection