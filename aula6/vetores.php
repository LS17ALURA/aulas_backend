<h2>Vetores</h2>
<p>
    São estruturas de armazenamento compostas heterogêneas (1 dimensão) ou homoêneas (2 dimensões), que podem ser indexadas numericamente ou textualmente.
</p>
<?php
    //exemplo variável simples
    $nota=6;
    $nota=3;
    echo nl2br($nota.PHP_EOL);
    //exemplo vetor indexado numericamente
    $notas = []; //outra forma: $notas=array()
    $notas[]=6;
    $notas[]=3;
    //var_dump($notas);
    //imprimir só a primeira nota
    echo (($notas[0]+$notas[1])/count($notas)); //count() funciona igual a sizeof(), mas é mais rápido e otimizado
    //vetores com índice textual
    $notas =[]; //cria um betor vazio
    $notas['debora']=7;
    $notas['murilo']=7.8;
    $notas['poliana']=9;
    echo '<p></p>';
    echo nl2br("A Poliana tirou nota ".$notas['poliana'].PHP_EOL);
    echo nl2br("A Poliana tirou nota ".$notas['andre'].PHP_EOL.PHP_EOL); //undefined
    //imprimir todas as notas
    $vetor=[2,4,8,10,12,14,16];
    print_r($vetor);//Imprime as informações da variável ​​de uma forma mais legível para os humanos
    echo nl2br(PHP_EOL.PHP_EOL); 
    $soma=0;
    for ($i=0; $i <= 6; $i++) { 
        echo nl2br($vetor[$i].PHP_EOL);
        // somas os valores de um vetor
        $soma+=$vetor[$i];
    }
    echo nl2br(PHP_EOL.'A soma dos valores é '.$soma.PHP_EOL.PHP_EOL);
?>