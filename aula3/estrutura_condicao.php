<h2>Estrutura de condição</h2>
<hr><p>A estrutura de condição é utilizada para avaliar qual instruçao deve ser executada, dada uma condição.</p>
<p> Se a condição for verdadeira executa a instruçõa 1, caso contrário executa instrução 2.</p>
<strong>Exemplo</strong>
<pre>
    if(<em>condicao</em>){
        //intrução 1
    }else{
        //instrução 2
    }
</pre>
<?php
/* 
Para passar de ano é necessário tirar no mínimo 6 pontos em cada discíplina. Míurilo tirou... Ele foi aprovado ou não? 
*/
$nota_do_murilo=5;
$faltas=76;
if(($nota_do_murilo>=6) and ($faltas<75)){
    echo "Múrilo foi aprovado";
}
    echo "Múrilo foi reprovado";
?>
<br><br><strong>Exemplo 2</strong>
<p>O aluno para ser aprovado precisa obter nota superior a 6 pontos, para fazer o exame final precisa ter tirado menos que 6 e mais que 3
    pontos. Notas menores que 3 são reprovações diretas.
</p>
<?php
$nota=6;
if($nota>=6){
    echo "Aprovado";
}else if($nota>3){
    echo "Faz exame final";
}else{
    echo "Reprovado";
}
?>