<?php

require_once "../conexao.php";

//verifica se foi enviado o param id pela URL
if(isset($_GET['id'])){

    //pega o valor do id que foi enviado pela URL
    $id = $_GET['id'];

    //String com o comando SQL para ser executado no DB
    $sql = "SELECT * FROM `produto` WHERE  `idproduto`= ? ; ";

    //Prepara o SQL para ser executado no banco de dados
    $comando = $conexao->prepare($sql);

    //adiciona os valores nos parâmetros
    $comando->bind_param("i", $id);

    //executa o SQL - Comando no Banco de Dados
    $comando->execute();

    // executa o SQL - comando no bd
    $resultado=$comando->get_result();

    // pegar a primeira linha do resultado
    $produto=$resultado->fetch_assoc();

    // var_dump($linha);
}

