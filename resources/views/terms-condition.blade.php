@extends('layout.app')
@section('content')
<div id="about-main" class=" pb-100">
        <div class="jumbotron">
            <div class="jumbotron-inner">
                <div class="top-box">
                    <div class="content-box">
                        <h1>
                        Terms & Condition <span class="color">Sawo</span>
                        </h1>
                        <!-- <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container about-page pb-100 pt-100">
            <div class="row py-2">
                <div class="col-md-12 px-2">
                {!! get_text('termconditions_desc') !!}
                </div>        
            </div>
        </div>
    </div>
@endsection