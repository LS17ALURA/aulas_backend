<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de produtos</h1>
    <hr>

    <form action="inserir.php" method="post">
        <label for="nome">Nome</label><br>
        <input type="text" id="nome" name="nome" ><br>

        <label for="descricao">Descrição</label><br>
        <input type="textarea" id="descricao" name="descricao" ><br>

        <label for="preco">Preço</label><br>
        <input type="number" step="0.01" id="preco" name="preco" ><br>

        <label for="foto">Foto</label><br>
        <input type="file" id="foto" name="foto" value=""><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
<?php

?>