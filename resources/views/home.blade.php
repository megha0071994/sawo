@extends('layout.app')
@section('content')
<section class="more-hero">
        <div class=" container p-0">
            <div class="row">
                <div class="col-md-4 p-0">


                    <div class="hero-form">
                        <form action="{{ url('more-details') }}" method="get">
                        <input type="hidden" name="filter_type" id="filter_type" value="1" />
                            <h4>For multiple stops, choose Round Trip</h4>
                            <h5>The best way to travel around town</h5>

                            <div class="stack_input n_stack">
                                <h6>Select Vehicle</h6>


                                <ul class="nav nav-tabs vehicle-select">
                                    <li><a data-toggle="tab" class="active filtertab" data-index="1" href="#loading">Loading Rentals</a></li>
                                    <li><a data-toggle="tab" class="filtertab" data-index="0" href="#other">Other Rentals</a></li>

                                </ul>

                                <div class="tab-content">

                                    <div id="loading" class="tab-pane fade in active vehi show">
                                        <div class="stack_input">
                                            <h6>Pickup Location</h6>
                                            <input name="from_location" id="from_location" class="form-control">
                                            <input type="hidden" id="city_from" name="city_from">
                                            <ul class="response from_response"  style="display: none;"></ul>
                                        </div>
                                        <div class="stack_input">
                                            <h6>Drop Location</h6>
                                            <input name="to_location" id="to_location" class="form-control">
                                            <input type="hidden" id="city_to" name="city_to">
                                            <ul class="response to_response"  style="display: none;">
                                             </ul>
                                        </div>
                                        @foreach($subCategory1 as $key => $scat1)
                                        <div class="vehicle-box">
                                            <div class="vehi-img">
                                                <img src="{{ url('/') }}/public/front-assets/images/vehicle-3.png" alt="">
                                            </div>
                                            <div class="vehi-info">
                                                <h5>{{ $scat1['name'] }}</h5>
                                            </div>
                                            <div class="vehi-icon">
                                                <span><i class="fas fa-chevron-right"></i></span>
                                            </div>
                                            <input type="radio" name="type" value="{{ $scat1['id'] }}" @if($key==0) checked="checked" @endif  class="vehi-radio">
                                        </div>
                                        @endforeach
                                    </div>

                                    <div id="other" class="tab-pane fade vehi">
                                        <div class="stack_input">
                                            <h6>Work Location</h6>
                                            <input class="form-control" id="work_location" name="work_location">
                                            <input type="hidden" id="city_work" name="city_work">
                                            <ul class="response work_response"  style="display: none;"></ul>
                                        </div>
                                        <div class="vehicle-box">
                                            <div class="vehi-img">
                                                <img src="{{ url('/') }}/public/front-assets/images/vehicle-3.png" alt="">
                                            </div>
                                            <div class="vehi-info">
                                                <h5>Six Wheeler</h5>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="vehi-icon">
                                                <span><i class="fas fa-chevron-right"></i></span>
                                            </div>
                                            <input type="radio"  name="type" value="5" checked="checked" id="" class="vehi-radio">
                                        </div>

                                        <div class="vehicle-box">
                                            <div class="vehi-img">
                                                <img src="{{ url('/') }}/public/front-assets/images/vehicle-3.png" alt="">
                                            </div>
                                            <div class="vehi-info">
                                                <h5>Six Wheeler</h5>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="vehi-icon">
                                                <span><i class="fas fa-chevron-right"></i></span>
                                            </div>
                                            <input type="radio" name="info" id="" class="vehi-radio">
                                        </div>

                                        <div class="vehicle-box">
                                            <div class="vehi-img">
                                                <img src="{{ url('/') }}/public/front-assets/images/vehicle-3.png" alt="">
                                            </div>
                                            <div class="vehi-info">
                                                <h5>Six Wheeler</h5>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="vehi-icon">
                                                <span><i class="fas fa-chevron-right"></i></span>
                                            </div>
                                            <input type="radio" name="info" id="" class="vehi-radio">
                                        </div>

                                        <div class="vehicle-box">
                                            <div class="vehi-img">
                                                <img src="{{ url('/') }}/public/front-assets/images/vehicle-3.png" alt="">
                                            </div>
                                            <div class="vehi-info">
                                                <h5>Six Wheeler</h5>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="vehi-icon">
                                                <span><i class="fas fa-chevron-right"></i></span>
                                            </div>
                                            <input type="radio" name="info" id="" class="vehi-radio">
                                        </div>

                                        <div class="vehicle-box">
                                            <div class="vehi-img">
                                                <img src="{{ url('/') }}/public/front-assets/images/vehicle-3.png" alt="">
                                            </div>
                                            <div class="vehi-info">
                                                <h5>Six Wheeler</h5>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="vehi-icon">
                                                <span><i class="fas fa-chevron-right"></i></span>
                                            </div>
                                            <input type="radio" name="info" id="" class="vehi-radio">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="hero-btn">
                                <button  type="submit" class="btn-primary mt-3">Search Rentals</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div>
                        <h2 class="hero-title">No Matter Where You Travel <br> We've Got A Cab For You.</h2>
                        <p>Sawo For safe and comfortable Journeys .</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="features pt-100 pb-100">
        <div class="container p-0">
            <h1 class="text-center">What Differentiate Us With <span class="color">Others</span> </h1>
            <div class="saprator"></div>
            <div class="row justify-c">
                <div class="col-md-2">
                    <img src="{{ url('/') }}/public/front-assets/images/feature/clean-car.png" alt="">
                    <h5>Clean Cars</h5>
                </div>
                <div class="col-md-2">
                    <img src="{{ url('/') }}/public/front-assets/images/feature/transprent.png" alt="">
                    <h5>Transparent Billing</h5>
                </div>
                <div class="col-md-2">
                    <img src="{{ url('/') }}/public/front-assets/images/feature/reliable.png" alt="">
                    <h5>Reliable Service</h5>
                </div>
                <div class="col-md-2">
                    <img src="{{ url('/') }}/public/front-assets/images/feature/courteous.png" alt="">
                    <h5>Courteous Chauffeurs </h5>
                </div>
                <div class="col-md-2">
                    <img src="{{ url('/') }}/public/front-assets/images/feature/roundtrip.png" alt="">
                    <h5>Roundtrip Experts</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="about pt-100 pb-100 ">
        <div class="container p-0">
            <div class="row">

                <div class="col-md-6">
                    <div class="video">
                        <img src="{{ url('/') }}/public/front-assets/images/pngwing.com.png" alt="">
                    </div>

                </div>
                <div class="col-md-6 ab-area">
                    <h1>About <span class="color">Sawo</span> </h1>
                    <p>Sawo is on things of easy way for transportation and
                        logistics Service Provider according your business,
                        daily needs, Short root transportation, big root
                        transportation. Sawo Provide multiple transportations,
                        fleet services, logistic service at one place. We make
                        easy way for your transport service including Daily car
                        booking Service, Rental Booking service, Truck Booking
                        and all type Machine Booking Service. We provide all
                        type vehicle and machine at one place like all type Car,
                        Family Car, Trucks, JCB and many more. We offer separate
                        –separate app to manage all details at one application
                        for driver and vendor</p>
                    <div class="about-features">
                        <div class="ab-feature"><img src="{{ url('/') }}/public/front-assets/images/Icon payment-cash.png" alt=""><span>Cashless
                                Rides</span></div>
                        <div class="ab-feature"><img src="{{ url('/') }}/public/front-assets/images/Icon metro-security.png" alt=""><span>Secure and Safer
                                Rides</span></div>
                        <div class="ab-feature"><img src="{{ url('/') }}/public/front-assets/images/Icon awesome-calendar-check.png" alt=""><span>Flexible
                                bookings</span></div>
                        <div class="ab-feature"><img src="{{ url('/') }}/public/front-assets/images/Icon awesome-piggy-bank.png" alt=""><span>Affordable
                                packages</span></div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="driver pt-100 pb-100 ">
        <div class="container p-0 text-center">
            <h1><span class="color">Become </span>A Driver?</h1>
            <div class="row">

                <div class="col-md-12">
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut
                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores
                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut
                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores
                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut
                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores
                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                    </p>
                </div>

            </div>
            <a href="" class="btn-primary mt-3">Join Now</a>

        </div>
    </section>


    <section class="vehicals pt-100 pb-100 ">
        <div class="container p-0">
            <h1><span class="color">Our </span>Vehicals</h1>
            <div class="row">

                <div class="col-md-12">
                    <ul class="nav nav-pills justify-content-end vehic">
                    @foreach($subCategory as $key => $scat)
                        <li><a @if($key==0) class="active" @endif data-toggle="pill" href="#Block{{ $scat['id'] }}">{{ $scat['name'] }}</a></li>
                    @endforeach
                    </ul>

                    <div class="tab-content">
                    @foreach($subCategory as $key => $scat)
                        <div id="Block{{ $scat['id'] }}" class="tab-pane fade in @if($key==0) active show @endif">
                            <div class="vehical-cards p-6">
                            <?php $vehicle_types = get_vehicle_type($scat['id']); ?>
                            @foreach($vehicle_types as $vt)
                                <div class="vehical-card">
                                    <div class="v-img">
                                        <img src="{{ url('/') }}/public/front-assets/images/vid-5e8d9a170b896-big-jpg-500x500.png" alt="">
                                    </div>
                                    <h4>{{ $vt['name'] }}</h4>
                                    <div class="ratings" style="display:none">
                                        <span>4.5</span>
                                        <ul>
                                            <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                            <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                            <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                            <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                            <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>

                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>


        </div>
    </section>

    <section class="banner pt-100 pb-100 ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Sawo <span class="black">App</span></h1>

                    <h2><span class="black">Download The</span> Sawo App</h2>
                    <h3>For Your Android And IOS Mobile</h3>
                    <div class="apk-btn mt-3 d-flex">
                        <a href="#"><img src="{{ url('/') }}/public/front-assets/images/and-btn.png" class="mx" alt=""></a>
                        <a href="#"> <img src="{{ url('/') }}/public/front-assets/images/ios-btn.png" class="mx" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feedback pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-5 feedback-desc">
                    <h1><span class="color">Passenger </span>Feedback</h1>
                    <h2>What Say Our Passenger</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et
                        dolore magna aliquyam erat, sed diam voluptua. At vero
                        eos et accusam et justo duo dolores et ea rebum. Stet clita
                        kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et
                        dolore magna aliquyam erat, sed diam voluptua.</p>
                    <div class="feed-btn">
                        <a href="" class="btn-primary mt-5">Add Your Feedback</a>
                        <a href="" class="btn-secondary ml-2 mt-5">View All</a>
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="slider-container">
                                    <div class="slider-img W-25">
                                        <img src="{{ url('/') }}/public/front-assets/images/FEED-IMG.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="client-info W-75">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                            eirmod tempor invidunt ut labore et dolore. </p>
                                        <h5>Jhonathon Deo</h5>
                                        <p>CEO Burnlab gallery</p>
                                        <div class="ratings">
                                            <span>4.5</span>
                                            <ul>
                                                <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                                <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                                <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                                <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                                <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-container">
                                    <div class="slider-img W-25">
                                        <img src="{{ url('/') }}/public/front-assets/images/FEED-IMG.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="client-info W-75">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                            eirmod tempor invidunt ut labore et dolore. </p>
                                        <h5>Jhonathon Deo</h5>
                                        <p>CEO Burnlab gallery</p>
                                        <div class="ratings">
                                            <span>4.5</span>
                                            <ul>
                                                <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                                <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                                <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                                <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                                <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slider-container">
                                    <div class="slider-img W-25">
                                        <img src="{{ url('/') }}/public/front-assets/images/FEED-IMG.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="client-info W-75">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                            eirmod tempor invidunt ut labore et dolore. </p>
                                        <h5>Jhonathon Deo</h5>
                                        <p>CEO Burnlab gallery</p>
                                        <div class="ratings">
                                            <span>4.5</span>
                                            <ul>
                                                <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                                <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                                <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                                <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>
                                                <li><img src="{{ url('/') }}/public/front-assets/images/star.png" alt=""></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-main pt-100 pb-100 ">
        <div class="contact-home text-center">
            <h1><span class="color">Write</span> Us</h1>
            <h3>Write us if have any suggestion and questions</h3>
            <div class="ch-form">
                <div class="container">


                    <form  class="form database_operations" action="{{ url('contact') }}" >

                        <div class="row">


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" id="nameLabel" for="name"></label>
                                    {{csrf_field()}}
                                    <input required="required" type="text" class="form-control" id="name" name="name"
                                        placeholder="Your name" tabindex="1">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" id="emailLabel" for="email"></label>
                                    <input required="required" type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email" tabindex="2">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" id="mobileLabel" for="mobile"></label>
                                    <input required="required" type="text" class="form-control" id="mobile" name="mobile"
                                        placeholder="Your Mobile No" tabindex="2">
                                </div>
                            </div>

                            <div class="col-md-12 ch-area">
                                <div class="form-group">
                                    <label class="form-label" id="messageLabel" for="message"></label>
                                    <textarea required="required" rows="1" cols="60" name="message" class="form-control" id="message"
                                        placeholder="Your message" tabindex="4"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-center margin-top-25">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div><!-- End row -->
                    </form><!-- End form -->
                </div>
            </div>
        </div>

    </section>
@endsection
