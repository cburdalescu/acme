@extends('base')

@section('css')
    <style>
        .carousel {
            width: 100%;
            margin-top: 50px;
        }
    </style>
@stop


@section('outsidecontainer')

<div class="row">
    <div class="">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/assets/slider/1.jpg" alt="image 1">
                    <div class="carousel-caption">
                        Acme Nature Tours
                    </div>
                </div>
                <div class="item">
                    <img src="/assets/slider/2.jpg" alt="image 2">
                    <div class="carousel-caption">
                        Experience Nature As Never Before
                    </div>
                </div>
                <div class="item">
                    <img src="/assets/slider/3.jpg" alt="image 3">
                    <div class="carousel-caption">
                        Register Now
                    </div>
                </div>
                <div class="item">
                    <img src="/assets/slider/4.jpg" alt="image 4">
                    <div class="carousel-caption">
                        Login
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

@stop

@section('content')

<div class="row">
    <div class="col-md-4 well text-center">
        <h3>About</h3>
        <span class="glyphicon glyphicon-globe bigger-icon" aria-hidden="true"></span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam, assumenda aut consectetur culpa dicta distinctio dolore eligendi, laborum qui, quo quod repellendus repudiandae.</p>
    </div>
    <div class="col-md-4 well empty-well text-center">
        <h3>Tours</h3>
        <span class="glyphicon glyphicon-plus-sign bigger-icon" aria-hidden="true"></span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam, assumenda aut consectetur culpa dicta distinctio dolore eligendi, laborum qui, quo quod repellendus repudiandae.</p>
    </div>
    <div class="col-md-4 well text-center">
        <h3>Contact</h3>
        <span class="glyphicon glyphicon-remove-sign bigger-icon" aria-hidden="true"></span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam, assumenda aut consectetur culpa dicta distinctio dolore eligendi, laborum qui, quo quod repellendus repudiandae.</p>
    </div>
</div>

@stop