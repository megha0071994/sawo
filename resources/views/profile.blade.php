@extends('layout.app')
@section('content')
<div class="breadcrum">
    @if($user_info->name) 
        <h1>{{$user_info->name}}</h1>
    @else 
        <h1>{{$user_info->mobile}}</h1>
    @endif
    </div>
    
      

    <div class="container ">
        <div >



            <div class="row career">
                <div class="col-md-4">
                    <img src="images/usr-pro.png" alt="" class="img-responsive">
                </div>
                <div class="col-md-8">
                    <div class="contact-home  p-0">
                        <h1>Edit<span class="color"> Profile</span></h1>
                        <div class="ch-form">
                            <div class="container">


                                <form id="contact-form" name="myForm" class="form database_operations" action="{{ url('profile') }}" role="form">

                                    <div class="row">


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" id="nameLabel" for="name"></label>
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{$user_info->id}}">
                                                <input type="text" class="form-control" required  id="name" value="{{$user_info->name}}" name="name"
                                                    placeholder="Your name" tabindex="1">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" id="emailLabel" for="email"></label>
                                                <input type="email" required value="{{$user_info->email}}" class="form-control" id="email" name="email"
                                                    placeholder="Your Email" tabindex="2">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" id="emailLabel" for="Mobile"></label>
                                                <input type="text" value="{{$user_info->mobile}}" required class="form-control" id="email" name="mobile"
                                                    placeholder="Your Mobile Number" tabindex="2">
                                            </div>
                                        </div>

                                        <div class="col-md-12 ch-area">
                                            <div class="form-group">
                                                <label class="form-label" id="messageLabel" for="message"></label>
                                                <textarea required rows="1" cols="60" name="address" class="form-control"
                                                    id="message" placeholder="Your Address" tabindex="4">
                                                {{$user_info->address}}
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="margin-top-25">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div><!-- End row -->
                                        <div class="col-md-6 cv-btn">
                                            <div class="margin-top-25">
                                                 </div>
                                        </div><!-- End row -->
                                    </div>
                                </form><!-- End form -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>
@endsection