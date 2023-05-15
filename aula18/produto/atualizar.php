<?php

require_once "../conexao.php";

if (isset($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST["preco"])) {
    $nome=$_POST["nome"];
    $descricao=$_POST["descricao"];
    $preco=$_POST["preco"];
    $foto="semfoto.png";
}

$sql = "UPDATE `db_catalogo_3infoa`.`produto` SET `nome`=?, `descricao`=?, `preco`=?, `foto`=? WHERE  `idproduto`=?;";
echo $sql;

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssds", $nome, $descricao, $preco, $foto);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

// abre o arquivo form.php
header("Location: form.php");

?>