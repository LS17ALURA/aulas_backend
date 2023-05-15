<h2>Exercício 1</h2>
<p>
    Criar o vetor abaixo, após imprimir seus valores utilizando a estrutura de repetição for.
</p>
<pre>
        +-----+
      0 |Pedro|
        +-----+
      1 |Pedro|
        +-----+
      2 |Pedro|
        +-----+
</pre>
<?php
    $nomes=["Pedro","Júlia","Maria"];
    for ($i=0; $i <= 2; $i++) { 
        echo nl2br($i." => ".$nomes[$i].PHP_EOL);
    }
?>