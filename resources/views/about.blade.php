@extends('layout.app')
@section('content')
<div id="about-main" class=" pb-100">
        <div class="jumbotron">
            <div class="jumbotron-inner">
                <div class="top-box">
                    <div class="content-box">
                        <h1>
                            About <span class="color">Sawo</span>
                        </h1>
                        <!-- <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        </p> -->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="img-layer-container">
                    <div class="team-image" id="team-image">
                        <img class="img-responsive" src="https://apimatic.io/img/theme/aboutUs/images-1.png" />
                    </div>

                    <div class="circles-container">
                        <div class="img-1">
                            <img class="img-responsive" src="https://apimatic.io/img/theme/aboutUs/Circles-1-1.svg" />
                        </div>
                        <div class="img-2">
                            <img class="img-responsive" src="https://apimatic.io/img/theme/aboutUs/Circles-2-1.svg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container about-page pb-100 pt-100">
            <div class="row py-2">
                <div class="col-md-12 px-2">
                    <h1 class="text-center">Our <span class="color">Values</span></h1>
                    <p class="text-justify pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aliquam tempore ex reiciendis tempora quis molestias cumque veniam facilis,
                        illo animi. Maiores quod quasi perspiciatis aut odit asperiores. Recusandae,
                        laboriosam iste. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aliquam tempore ex reiciendis tempora quis molestias cumque veniam facilis,
                        illo animi. Maiores quod quasi perspiciatis aut odit asperiores. Recusandae,
                        laboriosam isteLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aliquam tempore ex reiciendis tempora quis molestias cumque veniam facilis,
                        illo animi. Maiores quod quasi perspiciatis aut odit asperiores. Recusandae,
                        laboriosam iste.
                        Aliquam tempore ex reiciendis tempora quis molestias cumque veniam facilis,
                        illo animi. Maiores quod quasi perspiciatis aut odit asperiores.</p>
                </div>

            </div>
            <div class="row py-2">
                <div class="col-md-6 px-2">
                    <h1>Our <span class="color">Goal</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aliquam tempore ex reiciendis tempora quis molestias cumque veniam facilis,
                        illo animi. Maiores quod quasi perspiciatis aut odit asperiores. Recusandae,
                        laboriosam iste. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aliquam tempore ex reiciendis tempora quis molestias cumque veniam facilis,
                        illo animi. Maiores quod quasi perspiciatis aut odit asperiores. Recusandae,
                        laboriosam isteLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aliquam tempore ex reiciendis tempora quis molestias cumque veniam facilis,
                        illo animi. Maiores quod quasi perspiciatis aut odit asperiores. Recusandae,
                        laboriosam iste.
                        Aliquam tempore ex reiciendis tempora quis molestias cumque veniam facilis,
                        illo animi. Maiores quod quasi perspiciatis aut odit asperiores. Recusandae,
                        laboriosam iste</p>
                </div>
                <div class="col-md-6  px-2">
                    <img src="{{ url('/') }}/public/front-assets/images/driver.jpg" alt="" class="img-responsive">
                </div>
            </div>
            <div class="row py-5">

                <div class="col-md-6 order px-2">
                    <img src="{{ url('/') }}/public/front-assets/images/new-driver.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-md-6  px-2">
                    <h1>Our <span class="color">Mission</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aliquam tempore ex reiciendis tempora quis molestias cumque veniam facilis,
                        illo animi. Maiores quod quasi perspiciatis aut odit asperiores. Recusandae,
                        laboriosam iste. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aliquam tempore ex reiciendis tempora quis molestias cumque veniam facilis,
                        illo animi. Maiores quod quasi perspiciatis aut odit asperiores. Recusandae,
                        laboriosam isteLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aliquam tempore ex reiciendis tempora quis molestias cumque veniam facilis,
                        illo animi. Maiores quod quasi perspiciatis aut odit asperiores. Recusandae,
                        laboriosam iste.
                        Aliquam tempore ex reiciendis tempora quis molestias cumque veniam facilis,
                        illo animi. Maiores quod quasi perspiciatis aut odit asperiores. Recusandae,
                        laboriosam iste</p>
                </div>
            </div>
        </div>
    </div>
@endsection