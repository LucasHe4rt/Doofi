@extends('layouts.app')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide my-slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('img/slider1.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/slider2.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/slider3.jpg')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Proximo</span>
        </a>
    </div>
        <div class="container">
            <div  class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="card text-white  mb-3">
                        <h3 class="card-header bg-primary">Restaurantes</h3>
                        <a href="{{route('rest.index')}}"><img src="{{asset('img/imgcard1.jpg')}}" alt="Card image"></a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-white  mb-3">
                        <h3 class="card-header bg-primary">Lanchonetes</h3>
                        <a href="#">
                            <img src="{{asset('img/imgcard2.jpg')}}" alt="Card image"></a>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="card text-white  mb-3">
                        <h3 class="card-header bg-primary">Pizzarias</h3>
                        <a href="#"><img src="{{asset('img/imgcard3.jpg')}}" alt="Card image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white  mb-3">
                        <h3 class="card-header bg-primary">Outros</h3>
                        <a href="#"><img src="{{asset('img/imgcard4.jpg')}}" alt="Card image"></a>
                    </div>
                </div>
            </div>
        </div>
    <div class="footer-copyright text-center py-3 doofi-footer">
        ©2018 Copyright - Doofi
    </div>
@endsection
