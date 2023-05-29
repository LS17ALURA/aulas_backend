<?php 
    include_once "../template/cabecalho.php";
?>
<div class="container">
    <form action="verifica_login.php" method="post">

    <label class="from-label">Usuário</label>
    <input type="text" name="usuario" class="form-control">
    
    <label class="from-label">Senha</label>
    <input type="password" name="senha" class="form-control">
    
    <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
<div>
<?php
    include_once "../template/rodape.php";
?>