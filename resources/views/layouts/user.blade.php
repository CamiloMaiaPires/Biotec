<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">
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
	
	
	
	.titulo {
		color: aliceblue;
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
	}
	
	@media (min-width:992px) {
		.navbar-brand {
			transform: translateY(-50%);
		}
		#teste {
			height: 100px;
		}
	}

	.navbar-brand-middle {
		transform: translateX(-50%);
		left: 50%;
		position: absolute;
		width: 200px;
		
	}

	#img {
		width: 70%;
		height: auto;
	}

	@media only screen and (max-width: 995px) {
  	#img {
    	width: 40px;
		height: auto;
  	}
}

.card-title{
	margin-top: 10px;
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
			<h1 class="titulo" style="display: inline">Biotecnologia</h1> 
		</div>
		<div class="d-block d-sm-none" style="text-align: center">
			<h2 class="titulo" style="display: inline">Biotecnologia</h2> 
		</div>
	</div>
	
	<nav id="teste" class="navbar sticky-top  navbar-expand-lg navbar-light bg-light" style="margin-top: 10px;;">
		<a class="navbar-brand" id="logo" href="#"> <img class="logo-img" id="img" src="../img/Logo_biotec.png"/> </a>
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



	@yield('content')
	
	<div class="container-fluid" style="background: #717171 ; padding:10px;">
		<h3 style="display: inline; font-size:1.1rem;"><b>CONHEÇA E CURTA NOSSAS PÁGINAS</b></h3><i style="margin-top:10px;margin-bottom:10px;font-size:1.9em; margin-left:10px;" class="fab fa-facebook"></i> <i style="margin-top:10px;font-size:1.9em;margin-left:5px;margin-bottom:10px;" class="fab fa-instagram"></i>
	</div>


	<div class="span12" style="text-align: left;">
		<div class="span12" style="text-align: left;">
			<div class="container" style="margin-top: 15px;">
				<div class="row">
					<div class="col-sm"  style="margin-top:30px;">
						<h4>links Rápidos</h4> <a href="" target="_blank" class="link_footer">Vagas e Empregos</a>
						<br> <a href="" target="_blank" class="link_footer">Mapa</a>
						<br> <a href="" target="_blank" class="link_footer">Contato</a>
						<br> </div>
					<div class="col-sm" style="margin-top:30px;">
						<h4>Informações sobre</h4> <a href="" target="_blank" class="link_footer">UNIFESP</a>
						<br> <a href="" target="_blank" class="link_footer">UNIFESP SJC</a>
						<br> <a href="" target="_blank" class="link_footer">Como entrar em biotecnologia</a>
						<br> <a href="" target="_blank" class="link_footer">BCT - Bacharel interdisciplinar em ciência e tecnologia</a>
						<br> </div>
					<div class="col-sm" style="text-align: center; margin-top:30px;" >
						<div class="row ">
							<div class="col" style="align-content: center">
								<img src="{{asset('img/ict_logo.png')}}" style="vertical-align: middle; margin-right:10px;height:60px;margin-bottom:10px;"> 
								<img src="{{asset('img/log.png')}}" style="vertical-align: middle;margin-bottom:10px;"  height="60px;"> 
							</div> 
							
						</div>
						<br>
						<div class="row">
						<div class="col" style="align-content: center">
						ICT - instituto de ciência e tecnologia<br>
						UNIFESP São José dos Campos<br>
						Rua Talim, 330, São José dos Campos,<br>
						São Paulo, CEP 12231-280<br>
						Fones
					</div>
                    </div>
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
		if($(window).width() > 971){
		
		if($(document).scrollTop() > 153) {
			$("#logo").hide("slow");
			delay(500);
			$("#logo").addClass("navbar-brand-middle");
		} else {
			$("#logo").show("slow");
			$("#logo").removeClass("navbar-brand-middle");
		}
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