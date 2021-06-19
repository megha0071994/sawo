@extends('layout.app')
@section('content')

<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<div id="about-main" class=" pb-100">
     <div class="breadcrum">
      <h1>About <span class="color">Us</span></h1>
  </div>
        <div class="container about-page pb-100 pt-100">
            <div class="row">
                        <div class="col-md-6 text-justify">
                            <h1 class="my-2">Redefining Mobility for Billions</h1>
                            <p>Sawo is on things of easy way for transportation and logistics Service Provider according
                                your business, daily need, Short root transportation, big root transportation. Sawo Provide
                                multiple transportations, fleet services, logistic service at one place. We make easy way
                                for your transport service including Daily car booking Service, Rental Booking service,
                                Truck Booking and all type Machine Booking Service. We provide all type vehicle and machine
                                at one place like all type Car, Family Car, Trucks, JCB and many more. We offer separate
                                –separate app and web to manage all details at one application for User, driver and vendor .
                            </p>
                            <p>We offer all type transports service for according your business including logistics entire
                                the India. To increase your business with single click . we have all type of vehicle and
                                machine at one place in sawo . You can find one in just a click and can enjoy our quick and
                                safe transport services</p>
                            <p>We have dedicated Professional Worker for manage all type enquiry, support according your
                                demand any time at one call </p>
                        </div>
                         <div class="col-md-6">
                            <img class="img-thumbnail" src="{{asset('public/front-assets/images/about/cab.png')}}" width="100%"
                               >
                        </div>
                        
                        
                    </div>
                   

                    <div class="row my-4">
                        <div class="col-md-6 p-4">
                            <h2>Our <span class="color">Mission</span> </h2>
                            <p>We provide very easy and smooth service for all our user, driver, vendor according to own
                                area and business demand.</p>
                        </div>
                        <div class="col-md-6 p-4">
                            <h2>Our <span class="color"> Vision </span></h2>
                            <p>Every Driver and vendor make business online and bring own machine and vehicle online by sawo
                                and make money. </p>
                        </div>
                          <div class="col-md-12 col-md-offset-2">
                            <img class="img-thumbnail" src="{{asset('public/front-assets/images/about/cab1.png')}}" width="100%">
                        </div>
                       
                    </div>
                    
                     <section class="abo_new">
            <div class="container">
                <ul class="text-center what_offer">
                    <li>
                        <div class="img-box">
                            <img src="{{asset('public/front-assets/images/about/track.png')}}" alt="" >
                        </div>
                        <p>List Your Truck and machine </p>
                    </li>
                    <li>
                        <div class="img-box">
                            <img src="{{asset('public/front-assets/images/about/client.png')}}" alt="" >
                        </div>
                        <p>Get unlimited Client </p>
                    </li>
                    <li>
                        <div class="img-box">
                            <img src="{{asset('public/front-assets/images/about/boost.png')}}" alt="" >
                        </div>
                        <p>Earn and boost Business  </p>
                    </li>
                </ul>
            </div>
        </section>
                </div>
            </div>
        </section>
       
        </div>
    </div>
@endsection