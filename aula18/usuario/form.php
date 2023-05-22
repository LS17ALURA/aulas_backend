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
    <h1>Cadastro de usuários</h1>
    <hr>
<!-- (condição) ?? == if...else -->
<!-- echo (condição) ? true : false -->
    <form 
        action="<?php echo isset($usuario) ? "atualizar.php" : "inserir.php" ?>" 
        method="post"
        enctype="multipart/form-data"
    >
        <label for="nome">Nome</label><br>
        <input type="text" id="nome" name="nome" value="<?php echo $usuario["nome"] ?? ""; ?>"><br>
        <input type="hidden" id="id" name="id" value="<?php echo $usuario["idusuario"] ?? ""; ?>"><br>

       <label for="login">Login</label><br>
       <input type="text" id="login" name="login" value="<?php echo $usuario['login'] ?? ""; ?>"><br>
       
        <label for="senha">Senha</label><br>
        <input type="password" id="senha" name="senha" value="<?php echo $usuario["senha"] ?? ""; ?>"><br>

        <label for="foto">Foto</label><br>
        <input type="file" id="foto" name="foto" value=""><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
<?php

?>