<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <script src="{{asset('site/jquery.js')}}"></script>
    <script src="{{asset('site/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <img src="../img/logobiotec_transparente.png" width="100" height="95"/>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../home_adm.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="criar_post.php">Criar Post</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="adicionar_prof.php">Adicionar Professor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastrar_adm.php">Cadastrar Adm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="criar_evento.php">Criar Evento</a>
            </li>
          </ul>
          <ul class="navbar-nav mr-3">
            <li class="nav-item">
              <a class="nav-link" href="#">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sair</a>
            </li>
          </ul>
        </div>
      </nav>
      
      @yield('content')
</body>
</html>