@extends('layout.app')
@section('content')
<div class="breadcrum">
      <h1>Contact<span class="color"> Us</span></h1>
  </div>
<section class="contact-bg pt-100 pb-100 ">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="contact-home ">
                <h1><span class="color">Please fill the </span> <span class="black"> Form</span></h1>
                <h3 >Write us if have any suggestion and questions</h3>
                <div class="ch-form">
                    <div class="container">
                        <form id="contact-form" class="form database_operations" action="{{ url('contact') }}" >
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{csrf_field()}}
                                        <label class="form-label" id="nameLabel" for="name"></label>
                                        <input required="required" type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" id="emailLabel" for="email"></label>
                                        <input required="required" type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label" id="emailLabel" for="Mobile"></label>
                                        <input required="required" type="text" class="form-control" id="email" name="mobile" placeholder="Your Mobile Number" tabindex="2">
                                    </div>
                                </div>
                                <div class="col-md-12 ch-area">
                                    <div class="form-group">
                                        <label class="form-label" id="messageLabel" for="message"></label>
                                        <textarea rows="3" cols="60" required="required" name="message" class="form-control new-t" id="message" placeholder="Your message" tabindex="4"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="margin-top-25">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div><!-- End row -->
                        </form><!-- End form -->
                    </div>
                </div>
            </div>
        
        </div>
        <div class="col-md-6 "> <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=indore+(vijay%20nagar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/draw-radius-circle-map/">Measure km radius</a></div></div>
        <div class="col-md-4 ">
            <div class="d-flex">
                <div class="c-box m-2">
                    <img src="{{ url('/') }}/public/front-assets/images/contact-pin.png" alt="">
                    <h4>Address</h4>
                    <h5>C21 Mall, 310 3rd floor orbit mall near, Scheme 54 PU4, Indore, Madhya Pradesh 452001</h5>
                </div>
            </div>
            </div>
            <div class="col-md-4 ">
                <div class="c-box m-2">
                    <img src="{{ url('/') }}/public/front-assets/images/contact-email.png" alt="">
                    <h4>Contact</h4>
                    <h5>sawoservices@gmail.com</h5>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="c-box m-2">
                    <img src="{{ url('/') }}/public/front-assets/images/contact-call.png" alt="">
                    <h4>Mobile</h4>
                    <h5>0731 4000 308</h5>
                </div>
            </div>

        </div>
    </div>
</div>
</section>
@endsection