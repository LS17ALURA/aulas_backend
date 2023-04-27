<?php

require_once "../conexao.php";

$nome=$_POST["nome"];
$descricao=$_POST["descricao"];
$preco=$_POST["preco"];


// string com o comando sql para ser executado no db
$sql="INSERT INTO `produto` (`nome`, `descrisao`, `preco`, `foto`) VALUES ('$nome', '$descricao', '$preco', 'semfoto.png');";
echo $sql;
// prepara o sql para ser executado no bd
$comando=$conexao->multi_query($sql);

// // adiciona os valores nos parâmetros
// $comando->bind_param("ssds","a","b",1,'c');

// // executa os valores nos parâmetros
// $comando->execute();

// abre o arquivo form.php
// header("Location: form.php");

?>