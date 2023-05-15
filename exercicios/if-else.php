<?php
$nota1=6;
$nota2=8;
$nota3=2;
$media=($nota1+$nota2+$nota3)/3;
if($media>=6){
    echo "Aprovado";
}else if($media>3){
    echo "Em recuperação";
}else{
    echo "Reprovado";
}
?>