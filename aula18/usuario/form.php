<?php
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
?>

<div class="container">
    <h1>Cadastro de usuários</h1>
    <hr>
<!-- (condição) ?? == if...else -->
<!-- echo (condição) ? true : false -->
    <form 
        action="<?php echo isset($usuario) ? "atualizar.php" : "inserir.php" ?>" 
        method="post"
        enctype="multipart/form-data"
    >
        <label for="nome" class="form-label">Nome</label><br>
        <input type="text" id="nome" name="nome" class="form-control" value="<?php echo $usuario["nome"] ?? ""; ?>"><br>
        <input type="hidden" class="form-control"  id="id" name="id" value="<?php echo $usuario["idusuario"] ?? ""; ?>"><br>

       <label for="login" class="form-label">Login</label><br>
       <input type="text" class="form-control"  id="login" name="login" value="<?php echo $usuario['login'] ?? ""; ?>"><br>
       
        <label for="senha" class="form-label">Senha</label><br>
        <input type="password" class="form-control"  id="senha" name="senha" value="<?php echo $usuario["senha"] ?? ""; ?>"><br>

        <label for="foto" class="form-label">Foto</label><br>
        <input type="file" class="form-control"  id="foto" name="foto" value=""><br><br>

        <button type="submit" class="btn btn-dark">Cadastrar</button>
    </form>
</div>
<?php
    require_once "../template/rodape.php";
?>