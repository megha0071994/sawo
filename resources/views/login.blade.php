@extends('layout.app')
@section('content')
  <!-- ***********login****** -->
  <div class="login-wrapper">
    <div class="container login pt-100 pb-100">

        <div class="row d-flex ">
            <div class="col-md-4">
              
                <div class="hero-form">
                    <h2 class="hero-title my-3">Login Here!</h2>
                    <form action="">
                        <h4>Please enter your credentials</h4>
                        <P class="red">please check the number.</P>
                        <div class="stack_input">
                            <h6>Mobile No.</h6>
                            <input class="form-control">
                        </div>
                        <div class="stack_input">
                            <h6>OTP</h6>
                            <input class="form-control">
                        </div>
                        <div class="hero-btn">
                            <a href="more_details.html" class="btn-primary mt-3 d-block">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection