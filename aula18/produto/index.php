
<?php 
    require_once "consultar_todos.php";
    require_once "../template/cabecalho.php"; 
?>
    <div class="container">
        <h1>Produtos</h1>
        <hr>        
        <div class="text-end">
            <a href="form.php" class="btn btn-success">
                Inserir produto
            </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($produtos as $produto): ?>
                    <tr>
                        <th scope="row"><?php echo $produto["nome"]; ?></th>
                        <td><?php echo $produto["preco"]; ?></td>
                        <td>
                            <img src='../uploads/<?php echo $produto['foto']; ?>' height="30px" alt=""></img>
                        </td>
                        <td>
                        <a href="excluir.php?id=<?php echo $produto["idproduto"]; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Excluir</a>
                        <a href="form.php?id=<?php echo $produto["idproduto"]; ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Atualizar</a>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

<?php
    require_once "../template/rodape.php";
?>