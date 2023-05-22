<?php

require_once "../conexao.php";

//verifica se foi enviado o param id pela URL

//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `usuario`; ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

// pega o resultado da consulta
$resultado=$comando->get_result();

// cria um vetor vazio
$usuarios=[];

// pega todas as linhas do resultado
while ($usuario = $resultado->fetch_assoc()) { # usou-se = para receber o resultado, qnquanto houver resultado a receber ele roda
    // adicionar o usuario(linha)
    $usuarios[]=$usuario;
}


