@extends('layouts.app')
@section('content')
    <div id="slider" class="my-slide">
        <div><img src="http://placehold.it/1287x400"></div>
        <div><img src="http://placehold.it/1287x400"></div>
        <div><img src="http://placehold.it/1287x400"></div>
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

@endsection
