<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('store_professores') }}" method="post">
        @csrf
        <label>Nome do professor</label>
        <input type="text" name="name">
        <br/>
        <label>Laboratorio</label>
        <input type="text" name="lab">
        <br/>
        <label>Link para o laboratorio</label>
        <input type="text" name="lablink">
        <br/>
        <label>Link para o Lattes</label>
        <input type="text" name="lattes">
        <br/>
        <label>conteudo</label>
        <textarea name="text" cols="30" rows="10"></textarea>
        <br/>
        <input type="submit" value="cadastrar">
    </form>
</body>
</html>