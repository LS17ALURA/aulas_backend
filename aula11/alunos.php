<?php
    $aluno1=["nome"=>"Poliana Oliveira","nota1"=>7,"nota2"=>9];
    $aluno2=["nome"=>"Múrilo Alexandre","nota1"=>8,"nota2"=>5];
    $aluno3=["nome"=>"André Felipe","nota1"=>6,"nota2"=>7]; 
    $aluno4=["nome"=>"Lavinia Sandi","nota1"=>9,"nota2"=>9];

    $dados=[$aluno1,$aluno2,$aluno3,$aluno4];

    // print_r($dados);  
    echo json_encode($dados);
    // [] lista ou array numérico
    // {} =>
    
?>