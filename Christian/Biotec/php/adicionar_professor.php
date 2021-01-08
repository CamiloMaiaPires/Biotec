<!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="sortcut icon" href="../img/logobiotec_transparente.ico" type="image/x-icon"/>;
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <title>Adicionar Professor</title>
  </head>
  <body>
    
    <?php
      include "menu_adm.php";
    ?>

    <div class="container" id="criar_professor">

      <form>
        <h4><i class="fas fa-portrait"></i> Professor:</h4>
        <div class="row">
          <div class="col">
            <label>Nome:</label>
            <input type="text" class="form-control is-valid" placeholder="Nome do Professor">
          </div>
        </div>
        <br/>
        <div class="row">
          <div class="col">
            <label>Área de Atuação:</label>
            <input type="text" class="form-control is-valid" placeholder="Área de Atuação">
          </div>
        </div>
        <br/>
        <div class="row">
          <div class="col">
            <label>Laboratório:</label>
            <input type="text" class="form-control is-valid" placeholder="Laboratório">
          </div>
        </div>
        <br/>
        <div class="row">
          <div class="col">
            <label>Link para o Lattes:</label>
            <input type="text" class="form-control is-valid" placeholder="Lattes">
          </div>
        </div>
        <br/>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Conteúdo:</label>
          <textarea class="form-control is-valid" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <label>Foto do Perfil:</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input is-valid" id="validatedCustomFile" required>
          <label class="custom-file-label" for="validatedCustomFile">Escolher arquivo</label>
        </div>
        <br/>
        <br/>
        <center>
          <button type="button" class="btn btn-success">Cadastrar</button>
        </center>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>