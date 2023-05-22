<div class="container">
        <h1>Usuários</h1>
        <hr>        
        <div class="text-end">
            <a href="form.php" class="btn btn-success">
                Inserir usuário
            </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Login</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usuarios as $usuario): ?>
                    <tr>
                        <th scope="row"><?php echo $usuario["nome"]; ?></th>
                        <td><?php echo $usuario["login"]; ?></td>
                        <td>
                            <img src='../uploads/<?php echo $usuario['foto']; ?>' height="30px" alt=""></img>
                        </td>
                        <td>
                        <a href="excluir.php?id=<?php echo $usuario["idusuario"]; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Excluir</a>
                        <a href="form.php?id=<?php echo $usuario["idusuario"]; ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Atualizar</a>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>