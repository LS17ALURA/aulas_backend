<?php
    require_once "consultar_por_id.php";
?>

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
<!-- (condição) ?? == if...else -->
<!-- echo (condição) ? true : false -->
<form action="<?php echo isset($produto) ? "atualizar.php" : "inserir.php" ?>" method="post">
        <label for="nome">Nome</label><br>
        <input type="text" id="nome" name="nome" value="<?php echo $produto["nome"] ?? ""; ?>"><br>
        <input type="hidden" id="id" name="id" value="<?php echo $produto["idproduto"] ?? ""; ?>"><br>

       <label for="descricao">Descrição</label><br>
       <textarea id="descricao" name="descricao"><?php echo $produto["descricao"] ?? ""; ?></textarea><br>
       
        <label for="preco">Preço</label><br>
        <input type="number" step="0.01" id="preco" name="preco" value="<?php echo $produto["preco"] ?? ""; ?>"><br>

        <label for="foto">Foto</label><br>
        <input type="file" id="foto" name="foto" value=""><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
<?php

?>