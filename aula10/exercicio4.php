<h2>Exercício 4</h2>
<p>
    Criar a matriz abaixo, após imprimir seus valores utilizando a estrutura de repetição foreach.
</p>
<pre>
         +--------+--+--+
 0       |Poliana |7 |9 |
         +--------+--+--+
 1       |Múrilo  |8 |5 |
         +--------+--+--+
 2       |André   |6 |7 |
         +--------+--+--+
</pre>
<?php
    $aluno1=["nome"=>"Poliana","nota1"=>7,"nota2"=>9];
    $aluno2=["nome"=>"Múrilo","nota1"=>8,"nota2"=>5];
    $aluno3=["nome"=>"André","nota1"=>6,"nota2"=>7];

    $matriz=[$aluno1,$aluno2,$aluno3];
    $i=0;
    foreach ($matriz as $key => $value) { //foreach - index qualquer
            echo nl2br($value["nome"]." | ".$value["nota1"]." | ".$value["nota2"]." | ".PHP_EOL);
        }
?>