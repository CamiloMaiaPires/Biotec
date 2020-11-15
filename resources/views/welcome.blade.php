@extends('layouts.user')

@section('content')

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height:600px;">
		<ol class="carousel-indicators">
			<?php $i = 0 ?>
			@foreach($news as $new)
				<li data-target="#carouselExampleIndicators" data-slide-to="<?php $i +=1 ; echo $i  ?>" class="active"></li>
			@endforeach

		</ol>
		<div class="carousel-inner"> 
			@foreach($news as $new)
				<div class="carousel-item {{$loop->first ? 'active' : ''}}"> <img src="{{asset('/storage/'. $new->img)}}" style="height:600px;" class="d-block w-100" alt="..."> </div> 
			@endforeach 
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
	</div>



	<div class="container-fluid" style="height: auto;background-color:#fff; padding: 1em 2em;">
		<div class="row">
			<div class="col-md-8">
				<div class="row" style="margin-top: 10px;">
          <div class="col"><h3 style="display: inline"><strong> + Biotecnologia</strong> </h3></div>
          <div class="col"><a href="" style="float: right;text-decoration:none;">Todas as matérias</a></div>
        
      </div>
				<div class="row">
					<div style="margin-top: 10px;" class="container text-center my-3">
						<div class="row mx-auto my-auto">
							<div id="recipeCarousel" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner" role="listbox">
									<div class="carousel-item active">
										<div class="col-md-4">
											<div class="card card-body"> <img class="img-fluid" src="http://placehold.it/380?text=1"> </div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="col-md-4">
											<div class="card card-body"> <img class="img-fluid" src="http://placehold.it/380?text=2"> </div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="col-md-4">
											<div class="card card-body"> <img class="img-fluid" src="http://placehold.it/380?text=3"> </div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="col-md-4">
											<div class="card card-body"> <img class="img-fluid" src="http://placehold.it/380?text=4"> </div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="col-md-4">
											<div class="card card-body"> <img class="img-fluid" src="http://placehold.it/380?text=5"> </div>
										</div>
									</div>
									<div class="carousel-item">
										<div class="col-md-4">
											<div class="card card-body"> <img class="img-fluid" src="http://placehold.it/380?text=6"> </div>
										</div>
									</div>
								</div>
								<a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
								<a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
							</div>
						</div>
						</div>
				</div>
      </div>

      
			<div style="margin-top: 10px;" class="col-6 col-md-4"> 
				<h3><strong> Acontece No ICT </strong></h3> <br>
				<div class="row">
					<div class="col">
						<span style="background-color:blue; color:white;padding:30px;">
							dia 06 de Agosto
						</span>
						
						
						<i class="fas fa-calendar-times"></i>
					</div>
					<div class="col">Biotec Bosta</div>
				</div>
			
			</div>
		</div>
	</div>

@endsection