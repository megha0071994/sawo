<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sawo</title>
    <!-- css links -->
    <link rel="stylesheet" href="{{ url('/') }}/public/front-assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/front-assets/css/style.css">
    <!-- SWIPER SLIDER -->
    <link rel="stylesheet" href="{{ url('/') }}/public/front-assets/css/swiper.css" />
    <link rel="icon" href="{{ url('/') }}/public/front-assets/images/icon.png" type="image/x-icon" />
    <script>
    var BASE_URL = "{{ url('/') }}";
    </script>
</head>

<body>

<!--<div id="preloader">-->
<!--	<div id="status">&nbsp;</div>-->
<!--</div>-->
    <header>

        <div class="top-header">
            <div class="container p-0">
                <div class="t_head_content">
                    <h5 class="pl-2">Follow Us</h5>
                    <div class="social-icons">
                        <ul>
                            <li><a href="https://www.facebook.com/Sawoservices-100796154959356"><img src="{{ url('/') }}/public/front-assets/images/header/Layer-0.png" alt=""></a></li>
                            <li><a href="https://www.youtube.com/channel/UCffMX7LCClsVyDwA_8frlYQ/about"><img src="{{ url('/') }}/public/front-assets/images/header/Layer -1.png" alt=""></a></li>
                            <li><a href="https://instagram.com/sawoservices?utm_medium=copy_link"><img src="{{ url('/') }}/public/front-assets/images/header/Layer -2.png" alt=""></a></li>
                            <li><a href="https://wa.me/7685001122"><img src="{{ url('/') }}/public/front-assets/images/new-i.svg" width="18" alt=""></a></li>
                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header">
            <div class="container p-0">
                <div class="nav">
                    <input type="checkbox" id="nav-check">
                    <div class="nav-header">
                        <div class="nav-title">
                            <a href="{{url('')}}"> <img src="{{ url('/') }}/public/front-assets/images/header/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="nav-btn">
                        <label for="nav-check">
                            <span></span>
                            <span></span>
                            <span></span>
                        </label>
                    </div>

                    <div class="nav-links">
                        <a class="nav-menu_call" href="#" ><img src="{{ url('/') }}/public/front-assets/images/header/call-icon.png"
                                alt="">+91 76 85 00 11 22</a>
                        @if(!Session::get('userinfo'))
                        <a class="nav-menu" href="{{ url('login') }}" ><img src="{{ url('/') }}/public/front-assets/images/header/signup.png" alt="">Sign
                            Up</a>
                        <a class="nav-menu" href="{{ url('login') }}" ><img src="{{ url('/') }}/public/front-assets/images/header/login.png"
                                alt="">Login</a>
                        @else 
                        <a class="nav-menu" href="{{ url('notifications') }}" ><img src="images/header/signup.png" alt="">Notification <span class="badge badge-light d-none">2</span>
                            </a>
						<a class="nav-menu" href="{{ url('profile') }}" ><img src="images/header/login.png" alt="">Profile </a>
						<a class="nav-menu" href="{{ url('logout') }}" ><img src="images/header/login.png" alt="">Logout </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-ab">
                    <img src="{{ url('/') }}/public/front-assets/images/header/logo.png" alt="">
                    <P> Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, sit deserunt vero maxime
                        consequuntur dicta. Praesentium in quos eveniet iure cum perspiciatis quas dolorum magnam! Fuga
                        pariatur eveniet aperiam nisi!</P>
                </div>
                <div class="col-md-4 footer-address">
                    <div class="footer-address">
                        <span><img src="{{ url('/') }}/public/front-assets/images/PIN.png" alt="">Address</span>
                        <h4>302, A-2 Aanadvan Building
                            Near Passport Office, Worldcup Squire, Indore 452016</h4>

                        <div class="social-media">
                            <h5 class="pl-2">Follow Us</h5>
                            <div class="social-icons">
                                <ul>
                                  
                                    <li><a href="https://www.facebook.com/Sawoservices-100796154959356"><img src="{{ url('/') }}/public/front-assets/images/2-foot.png" alt=""></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCffMX7LCClsVyDwA_8frlYQ/about"><img src="{{ url('/') }}/public/front-assets/images/3-foot.png" alt=""></a></li>
                                    <li><a href="https://instagram.com/sawoservices?utm_medium=copy_link"><img src="{{ url('/') }}/public/front-assets/images/4-foot.png" alt=""></a></li>
                                   <li><a href="https://wa.me/7685001122"><img src="{{ url('/') }}/public/front-assets/images/g-i.svg" width="18" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-links d-flex">
                    <div class="links">
                        <h4>Quik Links</h4>
                        <ul>
                            <li> <a href="{{ url('about') }}"> About Us</a></li>
                            <li> <a href="{{ url('faq') }}"> FAQ</a></li>
                            <li> <a href="{{ url('contact') }}"> Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="support">
                        <h4>Support</h4>
                        <ul>
                            <li> <a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                            <li><a href="{{ url('help-support') }}"> Help And Support</a></li>
                            <li><a href="{{ url('terms-condition') }}">Terms And Condition</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <div class="footer-bottom">
        <h4>Copyright @ {{date('Y')}} <span class="color">Sawo</span> </h4>
    </div>

    <!-- js links -->
    <script src="{{ url('/') }}/public/front-assets/js/jquery.js"></script>
    <script src="{{ url('/') }}/public/front-assets/js/bootstrap.min.js"></script>
    <script src="{{ url('/public/admin-assets/plugins/toastr/jquery.toaster.js') }}"></script>
    <script src="{{ url('/') }}/public/front-assets/js/swiper.js"></script>
    <script src="{{ url('/') }}/public/front-assets/js/app.js"></script>
    <script src="{{ url('/') }}/public/front-assets/js/custom.js"></script>
    <script>
       $(window).on('load', function() { // makes sure the whole site is loaded 
            $('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({'overflow':'visible'});
          })
    </script>
</body>

</html>
