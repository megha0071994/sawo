@extends('layout.app')
@section('content')
<section class="more-hero listing">
        <div class=" container p-0">
            <div class="row">
                <div class="col-md-8 p-0">


                    <div class="hero-form">
                        <form action="">
                            <h4>For multiple stops, choose Round Trip</h4>
                            <h5>The best way to travel around town</h5>
                            <div class="stack_input">
                                <h6>Pickup Location</h6>
                                <input id="from_location" class="form-control">
                                <input type="hidden" id="city_from">
                                <ul class="response from_response"  style="display: none;">
                                </ul>
                            </div>
                            <div class="stack_input">
                                <h6>Drop Location</h6>
                                <input id="to_location" class="form-control">
                                <input type="hidden" id="city_to">
                                <ul class="response to_response"  style="display: none;">
                                </ul>
                            </div>
                            <div class="stack_input n_stack">
                                <h6>Select Vehicle</h6>
                                <div class="vehi listing-p">
                                   

                                    <div class="vehicle-box">
                                        <div class="vehi-img">
                                            <img src="images/vehicle-3.png" alt="">
                                        </div>
                                        <div class="vehi-info">
                                            <div class="text-justify my-2">
                                                <span class="badge  badge-warning">Request</span>
                                                <span class="badge  badge-warning">Request</span>
                                            </div>
                                            <h5>Jhonathon Dio</h5>
                                            <div class="ratings">
                                                <span>4.5</span>
                                                <ul>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
        
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="vehi-icon">
                                          <a href="#" class="btn-secondary d-block">Request</a>
                                          <a href="#" class="btn-primary d-block">Skip</a>
                                        </div>
                                        <input type="radio" name="info" id="" class="vehi-radio">
                                    </div>

                                 

                                    <div class="vehicle-box">
                                        <div class="vehi-img">
                                            <img src="images/vehicle-3.png" alt="">
                                        </div>
                                        <div class="vehi-info">
                                            <div class="text-justify my-2">
                                                <span class="badge  badge-warning">Request</span>
                                                <span class="badge  badge-warning">Request</span>
                                            </div>
                                           
                                            <h5>Jhonathon Dio</h5>
                                            <div class="ratings">
                                                <span>4.5</span>
                                                <ul>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
        
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="vehi-icon">
                                          <a href="#" class="btn-secondary d-block">Request</a>
                                          <a href="#" class="btn-primary d-block">Skip</a>
                                        </div>
                                        <input type="radio" name="info" id="" class="vehi-radio">
                                    </div>

                                  

                                    <div class="vehicle-box">
                                        <div class="vehi-img">
                                            <img src="images/vehicle-3.png" alt="">
                                        </div>
                                        <div class="vehi-info">
                                            <h5>Jhonathon Dio</h5>
                                            <div class="ratings">
                                                <span>4.5</span>
                                                <ul>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
        
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="vehi-icon">
                                          <a href="#" class="btn-secondary d-block">Request</a>
                                          <a href="#" class="btn-primary d-block">Skip</a>
                                        </div>
                                        <input type="radio" name="info" id="" class="vehi-radio">
                                    </div>

                                

                                    <div class="vehicle-box">
                                        <div class="vehi-img">
                                            <img src="images/vehicle-3.png" alt="">
                                        </div>
                                        <div class="vehi-info">
                                            <h5>Jhonathon Dio</h5>
                                            <div class="ratings">
                                                <span>4.5</span>
                                                <ul>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
                                                    <li><img src="images/star.png" alt=""></li>
        
                                                </ul>
                                            </div>
                                            
                                        </div>
                                        <div class="vehi-icon">
                                          <a href="#" class="btn-secondary d-block">Request</a>
                                          <a href="#" class="btn-primary d-block">Skip</a>
                                        </div>
                                        <input type="radio" name="info" id="" class="vehi-radio">
                                    </div>

                                </div>
                            </div>
                            <div class="hero-btn">
                                <a href="" class="btn-primary mt-3">Search Rentals</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection 