<?php

$host="127.0.0.1";
$port="3306";
$user="root";
$password="";
$database="db_catalogo_3infoa";

// faz a conexão do PHP com o MySQL
$conexao=new mysqli($host,$user,$password,$database,$port,);

// verifica se houve um erro ao realizar a conexão
if ($conexao->connect_error) {
    echo nl2br("Foi encontrado o erro:".$conexao->connect_error.".");
    die();
}
?>