<h2>Exercício 3</h2>
<p>
    Criar o vetor abaixo, após imprimir seus valores utilizando a estrutura de repetição foreach e 2 for.
</p>
<pre>
         +-----+
 Nome    |Maria|
         +-----+
 Idade   |17   |
         +-----+
 Altura  |1.65 |
         +-----+
</pre>
<?php
    $aluno1=["nome"=>"Poliana","nota1"=>7,"nota2"=>9];
    $aluno2=["nome"=>"Múrilo","nota1"=>8,"nota2"=>5];
    $aluno3=["nome"=>"André","nota1"=>6,"nota2"=>7];

    $matriz=[$aluno1,$aluno2,$aluno3];

    foreach ($matriz as $key => $value) {
        echo nl2br($key." => ".$value.PHP_EOL);
    }

    // for ($i=0; $i <=2; $i++) { 
    //     for ($c=0; $c <=2 ; $c++) { 
    //         echo $matriz[strpos($c)];
    //     }    
    // }
?>