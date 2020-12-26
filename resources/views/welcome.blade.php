@extends('layouts.user') 

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php $i = 0 ?>
        @foreach($news as $new)
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php $i +=1 ; echo $i  ?>" class="active"></li>
        @endforeach
    </ol>
    <div class="carousel-inner"  style="height: auto;">
        @foreach($news as $new)
        <div class="carousel-item {{$loop->first ? 'active' : ''}}"><img src="{{asset('/storage/'. $new->img)}}"  class="d-block w-100" alt="..." /></div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
</div>

<div class="container-fluid" style="height: auto; background-color: #fff; padding: 1em 2em;">
    <div class="row">
        <div class="col-sm-8">
            <div class="row" style="margin-top: 10px;">
                <div class="col">
                    <h3 style="display: inline; font-size: 1.1rem;"><strong>+ Biotecnologia</strong></h3>
                </div>
                <div class="col"><a href="" style="float: right; text-decoration: none;">Todas as matérias</a></div>
            </div>
            <div class="row">
                <div style="margin-top: 10px;" class="container text-center my-3">
                    <div class="row mx-auto my-auto">
                        <div id="recipeCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-md-4">
                                        <div class="card card-body">
                                            <img class="img-fluid" src="http://placehold.it/380?text=1" />
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card card-body">
                                            <img class="img-fluid" src="http://placehold.it/380?text=2" />
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card card-body">
                                            <img class="img-fluid" src="http://placehold.it/380?text=3" />
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card card-body">
                                            <img class="img-fluid" src="http://placehold.it/380?text=4" />
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card card-body">
                                            <img class="img-fluid" src="http://placehold.it/380?text=5" />
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-4">
                                        <div class="card card-body">
                                            <img class="img-fluid" src="http://placehold.it/380?text=6" />
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span> <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span> <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top: 10px; margin-bottom: 10px;" class="col-sm-4">
            <h3><strong> Acontece No ICT </strong></h3>
            <br>
            <div class="row">
                <div class="col-2">
                    <div class="alert alert-primary" style="background-color: #26614a; padding: 10px; color: white; text-align: center; width: 100px;">
                        <h3>6</h3>
                        de agosto
                    </div>
                </div>
                <div class="col " style="margin-left: 50px; margin-top: 5px;font-size:0.8em;">
                        Envie uma mensagem de SOS<br />
                        historia do museu da ciencia<br />
                        6 de agosto
                </div>
            </div>

            <div class="row" style="margin-top: 5px;">
                <div class="col-2">
                    <div class="alert alert-primary" style="background-color: #26614a; padding: 10px; color: white; text-align: center; width: 100px;">
                        <h3>12</h3>
                        de abril
                    </div>
                </div>
                <div class="col" style="margin-left: 50px; margin-top: 5px;font-size:0.8em; margin-top: 5px;">
                   
                        Envie uma mensagem de SOS<br />
                        historia do museu da ciencia<br />
                        6 de agosto
                    
                </div>
            </div>

            <div class="row" style="margin-top: 5px;">
                <div class="col-2">
                    <div class="alert alert-primary" style="background-color: #26614a; padding: 10px; color: white; text-align: center; width: 100px;">
                        <h3>26</h3>
                        de outubro
                    </div>
                </div>
                <div class="col" style="margin-left: 50px; margin-top: 5px;font-size:0.8em; margin-top: 10px;">
                   
                        Envie uma mensagem de SOS<br />
                        historia do museu da ciencia<br />
                        6 de agosto
                    
                </div>
            </div>
        </div>
    </div>


    
</div>

@endsection
