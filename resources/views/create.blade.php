<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Pessoas</title>
</head>
<body>
    <h1>Criar Local</h1>    
    <form action="" method="POST">
    @csrf
    <input name="nomecompleto" type="text">
    <input name="endereco" type="text">
    <input type="nomedopai" type="text">
    <input type="nomedamae" type="text">
    <input type="cpf" type="number">
    <button type="submit">enviar</button>

    
    </form>
    
</body>
</html>