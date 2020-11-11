<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
	<style>
	@media (max-width: 768px) {
		.carousel-inner .carousel-item > div {
			display: none;
		}
		.carousel-inner .carousel-item > div:first-child {
			display: block;
		}
	}
	
	.carousel-inner .carousel-item.active,
	.carousel-inner .carousel-item-next,
	.carousel-inner .carousel-item-prev {
		display: flex;
	}
	/* display 3 */
	
	@media (min-width: 768px) {
		.carousel-inner .carousel-item-right.active,
		.carousel-inner .carousel-item-next {
			transform: translateX(33.333%);
		}
		.carousel-inner .carousel-item-left.active,
		.carousel-inner .carousel-item-prev {
			transform: translateX(-33.333%);
		}
	}
	
	.carousel-inner .carousel-item-right,
	.carousel-inner .carousel-item-left {
		transform: translateX(0);
	}
	
	body {
		background-image: url("{{asset('img/fundo.png')}}");
		font-family: 'Roboto', sans-serif;
	}
	
	.slide {
		height: 500px;
	}
	
	.titulo {
		color: aliceblue;
	}
	
	.logo-img {
		width: 70%;
		height: auto;
	}
	
	.titulo,
	.span12,
	.link_footer,
	.footer {
		color: #fff;
	}
	
	.link_footer:hover {
		color: #fff;
		text-decoration: underline;
	}
	
	#shrink {
		height: 100px;
		;
	}
	
	.diminuir {}
	
	@media (min-width:992px) {
		.navbar-brand {
			transform: translateY(-50%);
		}
		#teste {
			height: 100px;
		}
	}
	
	@media(max-width:990px;
	) {
		#teste {
			visibility: hidden;
		}
	}
	
	
	.navbar-brand-middle {
		transform: translateX(-50%);
		left: 50%;
		position: absolute;
		width: 200px;
		/* no height needed ... image will resize automagically */
	}
	</style>
	<title>Biotecnologia - UNIFESP</title>
</head>

<body>
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col"> </div>
			<div class="col-8 d-none d-lg-block" style="text-align: center; margin-top: 30px;">
				<h2 class="titulo ">UNIVERSIDADE FEDERAL DE SÃO PAULO</h2>
				<h1 class="titulo" style="display: inline">Biotecnologia</h1> </div>
			<div class="col d-none d-lg-block" style="text-align: right; margin-top:10px; margin-right:10px"> <img src="{{asset('img/logo_branco.svg')}}" height="60px;"> </div>
		</div>
		<div class="d-none d-sm-block d-md-block d-lg-none" style="text-align: center">
			<h1 class="titulo" style="display: inline">Biotecnologia</h1> </div>
	</div>
	<nav id="teste" class="navbar sticky-top  navbar-expand-lg navbar-light bg-light" style="margin-top: 10px;;">
		<a class="navbar-brand" id="logo" href="#"> <img class="logo-img d-none d-lg-block" src="../img/Logo_biotec.png" height="95" /> </a>
		<a class="navbar-brand2 d-none d-sm-block d-md-block d-lg-none" href="#"> <img src="../img/Logo_biotec.png" height="95" /> </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
				<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Graduação
            </a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="#">O que é Biotecnologia</a> <a class="dropdown-item" href="#">Forma de Ingresso</a> <a class="dropdown-item" href="#">Atuação Profissional</a> <a class="dropdown-item" href="#">Projeto Pedagógico</a> <a class="dropdown-item" href="#">Matriz curricular</a> </div>
				</li>
				<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Docentes
            </a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="#">Professores da Biotecnologia </a> <a class="dropdown-item" href="#">Laboratórios e linhas de pesquisa</a> <a class="dropdown-item" href="#">Comissão de Curso</a> <a class="dropdown-item" href="#">Professores do Campus UNIFESP- SJC</a> </div>
				</li>
				<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Alunos
            </a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="#">Ex- Alunos</a> <a class="dropdown-item" href="#">Trabalho de conclusão de Curso</a> <a class="dropdown-item" href="#">Estágio não obrigatório</a> <a class="dropdown-item" href="#">Monitorias e Tutorias</a> <a class="dropdown-item" href="#">Biblioteca</a> <a class="dropdown-item" href="#">NAE- Núcleo de Apoio ao Estudante</a> <a class="dropdown-item" href="#">GTAE-Grupo Técnico de Apoio ao Ensino</a> <a class="dropdown-item" href="#">DAE- Divisão de Assuntos Educacionais</a> <a class="dropdown-item" href="#">Projetos Estudantis do Campus</a> <a class="dropdown-item" href="#">Portal do Estudante</a> </div>
				</li>
				<li class="nav-item"> <a class="nav-link" href="#">Pós Graduação</a> </li>
				<li class="nav-item"> <a class="nav-link" href="#">Sobre</a> </li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
			</form>
		</div>
	</nav>
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

	<div class="container-fluid" style="background: rgb(201, 189, 174) ; padding:10px;">
		<h3 style="display: inline;"><b>CONHEÇA E CURTA NOSSAS PÁGINAS</b></h3><i style="margin-top:10px;margin-bottom:10px;font-size:3em; margin-left:10px;" class="fab fa-facebook"></i> <i style="margin-top:10px;font-size:3em;margin-left:5px;margin-bottom:10px;" class="fab fa-instagram"></i>
	</div>
	<div class="span12" style="text-align: left;">
		<div class="span12" style="text-align: left;">
			<div class="container" style="margin-top: 15px;">
				<div class="row">
					<div class="col">
						<h4>links Rápidos</h4> <a href="" target="_blank" class="link_footer">Vagas e Empregos</a>
						<br> <a href="" target="_blank" class="link_footer">Mapa</a>
						<br> <a href="" target="_blank" class="link_footer">Contato</a>
						<br> </div>
					<div class="col">
						<h4>Informações sobre</h4> <a href="" target="_blank" class="link_footer">UNIFESP</a>
						<br> <a href="" target="_blank" class="link_footer">UNIFESP SJC</a>
						<br> <a href="" target="_blank" class="link_footer">Como entrar em biotecnologia</a>
						<br> <a href="" target="_blank" class="link_footer">BCT - Bacharel interdisciplinar em ciência e tecnologia</a>
						<br> </div>
					<div class="col" style="text-align: center">
						<div class="row" style="vertical-align: middle; transform: translate(270px, 0px);"> <img src="{{asset('img/1233.png')}}" style="vertical-align: middle" height="60px;"> </div>
						<br>
						<div class="row"> <pre class="footer">
                    ICT - instituto de ciência e tecnologia
                    UNIFESP São José dos Campos
                    Rua Talim, 330, São José dos Campos,
                    São Paulo, CEP 12231-280
                    Fones
                    </pre></div>
					</div>
				</div>
				<div class="row" style="margin-top: 10px; text-align: center;">© 2020 Universidade Federal de São Paulo - Unifesp
					<br> </div>
			</div>
		</div>
	</div>
	<script src="{{asset('site/jquery.js')}}"></script>
	<script src="{{asset('site/bootstrap.js')}}"></script>
	<script src="https://kit.fontawesome.com/9f9f86e224.js" crossorigin="anonymous"></script>	
	<script>
	$(window).scroll(function() {
		if($(document).scrollTop() > 153) {
			$('nav').addClass('diminuir');
			$("#logo").hide("slow");
			delay(500);
			$("#logo").addClass("navbar-brand-middle");
		} else {
			$("#logo").show("slow");
			$('nav').removeClass('diminuir');
			$("#logo").removeClass("navbar-brand-middle");
		}
	});
	$('#recipeCarousel').carousel({
		interval: 10000
	})
	$('.carousel .carousel-item').each(function() {
		var minPerSlide = 3;
		var next = $(this).next();
		if(!next.length) {
			next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));
		for(var i = 0; i < minPerSlide; i++) {
			next = next.next();
			if(!next.length) {
				next = $(this).siblings(':first');
			}
			next.children(':first-child').clone().appendTo($(this));
		}
	});
	</script>
</body>

</html>