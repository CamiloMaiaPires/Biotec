<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">
    
    <title>Biotecnologia - UNIFESP</title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col">
          
          </div>
          <div class="col titulo">
            <h4>UNIVERSIDADE FEDERAL DE SÃO PAULO</h4>
            <h2>BIOTECNOLOGIA</h2>
          </div>
          <div class="col">
          </div>
        </div>
      </div>    
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"></a>
      <img src="../img/logobiotec_transparente.png" width="100" height="95"/>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Graduação
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">O que é Biotecnologia</a>
              <a class="dropdown-item" href="#">Forma de Ingresso</a>
              <a class="dropdown-item" href="#">Atuação Profissional</a>
              <a class="dropdown-item" href="#">Projeto Pedagógico</a>
              <a class="dropdown-item" href="#">Matriz curricular</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Docentes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Professores da Biotecnologia </a>
              <a class="dropdown-item" href="#">Laboratórios e linhas de pesquisa</a>
              <a class="dropdown-item" href="#">Comissão de Curso</a>
              <a class="dropdown-item" href="#">Professores do Campus UNIFESP- SJC</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Alunos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Ex- Alunos</a>
              <a class="dropdown-item" href="#">Trabalho de conclusão de Curso</a>
              <a class="dropdown-item" href="#">Estágio não obrigatório</a>
              <a class="dropdown-item" href="#">Monitorias e Tutorias</a>
              <a class="dropdown-item" href="#">Biblioteca</a>
              <a class="dropdown-item" href="#">NAE- Núcleo de Apoio ao Estudante</a>
              <a class="dropdown-item" href="#">GTAE-Grupo Técnico de Apoio ao Ensino</a>
              <a class="dropdown-item" href="#">DAE- Divisão de Assuntos Educacionais</a>
              <a class="dropdown-item" href="#">Projetos Estudantis do Campus</a>
              <a class="dropdown-item" href="#">Portal do Estudante</a>
            </div>
          </li>
          <li class="nav-item">
        <a class="nav-link" href="#">Pós Graduação</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre</a>
      </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
      </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
    
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('img/1.jpg')}}" height="600px" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      
      <script src="{{asset('site/jquery.js')}}"></script>
      <script src="{{asset('site/bootstrap.js')}}"></script>
  </body>
</html>