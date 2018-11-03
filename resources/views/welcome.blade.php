@extends('layouts.app')
@section('content')
    <div id="slider" class="my-slide">
        <div><img style="width: 100%" src="{{asset('img/slider1.jpg')}}" class="imgSlider"></div>
        <div><img style="width: 100%" src="http://placehold.it/1287x400" class="imgSlider"></div>
        <div><img style="width: 100%" src="http://placehold.it/1287x400" class="imgSlider"></div>

    </div>
        <div class="container">
            <div  class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="card text-white  mb-3">
                        <h3 class="card-header bg-primary">Restaurantes</h3>
                        <a href="#"><img style="height: 200px; width: 100%; display: block;" src="http://placehold.it/350x200" alt="Card image"></a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-white  mb-3">
                        <h3 class="card-header bg-primary">Lanchonetes</h3>
                        <a href="#">
                            <img style="height: 200px; width: 100%; display: block;" src="http://placehold.it/350x200" alt="Card image"></a>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="card text-white  mb-3">
                        <h3 class="card-header bg-primary">Pizzarias</h3>
                        <a href="#"><img style="height: 200px; width: 100%; display: block;" src="http://placehold.it/350x200" alt="Card image"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white  mb-3">
                        <h3 class="card-header bg-primary">Outros</h3>
                        <a href="#"><img style="height: 200px; width: 100%; display: block;" src="http://placehold.it/350x200" alt="Card image"></a>
                    </div>
                </div>
            </div>
        </div>
    <div class="container-fluid text-white bg-dark">
        <div class="container doofi-footer">
            <ul class="" style="max-height: 132px">
                <h4 class=" header-link">Tipos de estabelecimento:</h4>

                <li class="internal-link">
                    <a class="cousine-link"  href="">Bares</a>
                </li>
                <li class="internal-link">
                    <a class="cousine-link"  href="">Lanchonetes</a>
                </li>
                <li class="internal-link">
                    <a class="cousine-link"  href="">Pizzaria</a>
                </li>
                <li class="internal-link">
                    <a class="cousine-link"  href="">Pub's</a>
                </li>
                <li class="internal-link">
                    <a class="cousine-link"  href="">Restaurantes</a>
                </li>
                <li class="internal-link">
                    <a class="cousine-link"  href="">Sorveteria</a>
                </li>
            </ul>
            <p style="margin-left: 40px;margin-top: 20px;text-align: right">
                © Copyright 2018 - Doofi - Todos os direitos reservados
            </p>
        </div>
    </div>
@endsection
