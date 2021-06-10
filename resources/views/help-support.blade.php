@extends('layout.app')
@section('content')
<div class="breadcrum">
        <h1>Help &<span class="color"> Support</span></h1>
    </div>
    
      
    <div class="container help pb-100 pt-100">
        <div class="row">
          
          <div class="col-md-4">
              <div class="py-4">
           
                <h2 class="mb-2">Help and <span class="color">Support</span></h2>
              <h5 class="mb-2">We Provide All Type Support Here at your approach</h5>
              <p >Lorem ipsum dolor situr? Vel quibusdam aperiam autem pariatur consequaturur? Vel quibusdam aperiam autem pariatur consequatur  ur? Vel quibusdam aperiam autem pariatur consequaturonsectetur adipisicing elit. Cumque nihil blanditiis sequi. Hic dolor quos iure nobis voluptatum placeat atque unde voluptatem, sunt consequuntur? Vel quibusdam aperiam autem pariatur consequatur.</p>
              <a href="{{ url('contact') }}" class="btn btn-primary">Contact Us</a>
            </div>
          </div>
          <div class="col-md-8">
      
            <div class="row">
              <div class="col-md-6 px-4 my-2">
                <img src="{{ url('/') }}/public/front-assets/images/help-1.png" alt=""  >
                <div class="mt-3">
                  <h5 class="mb-2"><a href="#" >User Related Support</a></h5>
                  <p class="text-secondary">For press and media related queries please reach out to</p>
                </div>
              </div>
              <div class="col-md-6 px-4 my-2">
                <img src="{{ url('/') }}/public/front-assets/images/help-2.png" alt=""  >
                <div class="mt-3">
                  <h5 class="mb-2"  ><a href="#"  >Driver Related Support</a></h5>
                  <p class="text-secondary">If you have security concerns, please report your issues with Sawo</p>
                </div>
              </div>
              <div class="col-md-6 px-4 my-2">
                <img src="{{ url('/') }}/public/front-assets/images/help-3.png" alt=""  >
                <div class="mt-3">
                  <h5 class="mb-2"  ><a href="#"  >Vendor Related Support</a></h5>
                  <p class="text-secondary">If you are a driver or a fleet manager and want to attach your vehicle with Sawo</p>
                </div>
              </div>
              <div class="col-md-6 px-4 my-2">
                <img src="{{ url('/') }}/public/front-assets/images/help-11.png" alt=""  >
                <div class="mt-3">
                  <h5 class="mb-2"  ><a href="#"  >Customer Related Offer and support</a></h5>
                  <p class="text-secondary">For support with your bookings and other queries, visit the Support section in  Sawo app</p>
                </div>
              </div>
            </div>
            
          </div>
      
        </div>
      </div>
      @endsection