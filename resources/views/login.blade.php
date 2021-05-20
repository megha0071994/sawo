@extends('layout.app')
@section('content')
  <!-- ***********login****** -->
  <div class="login-wrapper">
    <div class="container login pt-100 pb-100">

        <div class="row d-flex ">
            <div class="col-md-4">
              
                <div class="hero-form">
                    <h2 class="hero-title my-3">Login Here!</h2>
                    @if(Request::segment(2)=='')
                    <form action="{{ url('sendOtp') }}" method="post">
                    @else 
                    <form action="{{ url('checkOtp') }}" class="database_operations">
                    @endif
                        <h4>Please enter your credentials</h4>
                        {{csrf_field()}}
                        @if(Request::segment(2)=='')
                        <div class="stack_input">
                            <h6>Mobile No.</h6>
                            <input class="form-control" name="mobile" required type="number" min="1">
                        </div>
                        @else 
                        <div class="stack_input">
                            <h6>OTP</h6>
                            <input type="hidden" name="user" value="{{ decrypt (Request::segment(2)) }}" />
                            <input class="form-control" required name="otp" min="1" type="number">
                        </div>
                        @endif
                        <div class="hero-btn">
                            <input type="submit" class="btn-primary mt-3 d-block" value="Send OTP" />
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection