<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titulo</title>
</head>
<body>
    <h1>Editar Local</h1>

    <form action="/cadastro/update/{{$cadastro->id}}" method="POST">
        @csrf
        <input name="nomecompleto" type="text" value="{{$cadastro->nomecompleto}}">
        <input name="endereco" type="text" value="{{$cadastro->endereco}}">
        <input name="nomedopai" type="text" value="{{$cadastro->nomedopai}}">
        <input name="nomedamae" type="text" value="{{$cadastro->nomedamae}}">
        <input name="cpf" type="number" value="{{$cadastro->cpf}}">
        <button type="submit">Enviar</button>
        <br>
    </form>
    <a href="/cadastro/delete/{{$cadastro->id}}">Deletar</a>
    
</body>
</html>