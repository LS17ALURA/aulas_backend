
<?php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php";  ?>
<div class="container">
    <h1>Cadastro de Produto</h1>
    <hr>

    <form 
    action="<?php echo isset($produto) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post"
    enctype="multipart/form-data"
    >

       <label for="nome" class="form-label">Nome</label><br>
       <input type="text" name="nome" id="nome" value="<?php echo $produto['nome'] ?? ""; ?>"><br>
       <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $produto['idproduto'] ?? ""; ?>"><br>

       <label for="descricao" class="form-label">Descrição</label><br>
       <textarea  name="descricao" class="form-control" id="descricao"><?php echo $produto['descricao'] ?? ""; ?></textarea><br>

       <label for="preco" class="form-label">Preço</label><br>
       <input type="number" class="form-control" step="0.01" name="preco" id="preco" value="<?php echo $produto['preco'] ?? "0.00"; ?>"><br>

       <label for="foto" class="form-label">Foto</label><br>
       <input type="file" class="form-control" name="foto" id="foto"><br>

       <br>
       <button type="submit" class="btn btn-dark">Cadastrar</button>

    </form>
</div>
    <?php require_once "../template/rodape.php";  ?>