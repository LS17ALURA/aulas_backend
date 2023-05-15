<h4>Exercício 1</h4>
<p>Crie um vetor como representado abaixo:</p>
<pre>
    +--------+
  0 |Murilo  |
    +--------+
  1 |4       |
    +--------+
  2 |3       |
    +--------+
</pre>
<?php
    $notas=["Murilo",4,3];
?>
<p>Após isto, calcule a média das posições 1 e 2 do vetor e armazene o resultado na posição 3.</p>
<?php
    $notas[]=(($notas[1]+$notas[2])/2);
?>
<p>Utilize uma estrutura de condição verificar se a média, armazenada na posição 3 é maior ou igual a 6, se for armazena na posição 4 
    do vetor a situação "Aprovado", caso contrário armazene "Reprovado".
</p>
<?php
    if ($notas[3]>=6) {
        $notas[]="Aprovado";
    }else{
        $notas[]="Reprovado";
    }
?>
<pre>
    +---------+
  0 |Murilo   |
    +---------+
  1 |4        |
    +---------+
  2 |3        |
    +---------+
  3 |3.5      |
    +---------+
  4 |Reprovado|
    +---------+
</pre>
<p>Imprima o vetor utilizando var_dump</p>
<?php
    var_dump($notas);
    echo nl2br(PHP_EOL.PHP_EOL.'Extra: imprima o vetor utilizando print_r para ter uma visão mais organizada'.PHP_EOL.PHP_EOL);
    print_r($notas);
?>