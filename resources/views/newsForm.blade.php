@extends('layouts.admin')

@section('content')
    <!---<form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Titulo</label>
        <input type="text" name="title">
        <br/>
        <label>Sub-titulo</label>
        <input type="text" name="subtitle">
        <br/>
        <label>Data</label>
        <input type="text" name="date">
        <br/>
        <label>conteudo</label>
        <textarea name="text" cols="30" rows="10"></textarea>
        <br/>
        <label>Imagem</label>
        <input type="file" name="image">
        <br/>
        <input type="submit" value="cadastrar">
    </form> --->
    <div class="container" id="criar_post">
        <h5>Antes de criar uma postagem, eis as instruções:</h5>
        <u>
          <li>Colocar um titulo;</li>
          <li>Colocar uma sinopse do post, essa sinopse irá aparecer em outras páginas do site;</li>
          <li>Colocar a data em que a postagem está sendo feita;</li>
          <li>Colocar apenas uma foto de 1900px/600px.</li>
        </u>
  
        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h4>Post:</h4>
            <div class="row">
                <div class="col">
                    <label>Título</label>
                    <input type="text" name="title" class="form-control is-valid" placeholder="Título">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col">
                    <label>Subtitulo/Sinopse</label>
                    <input type="text" name="subtitle" class="form-control is-valid" placeholder="Subtitulo">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col">
                    <label>Data</label>
                    <input type="text" name="date" class="form-control is-valid" placeholder="dd/mm/yyyy">
                </div>
            </div>
            <br/>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Texto do post:</label>
                <textarea class="form-control is-valid" name="text" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload da foto (1900X600):</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
              </div>
            <br/>
            <br/>
            <center>
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </center>
        </form>
    </div>
@endsection