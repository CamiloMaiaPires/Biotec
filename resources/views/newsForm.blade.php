<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
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
    </form>
</body>
</html>