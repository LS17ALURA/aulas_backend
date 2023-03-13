<h2>Exercício 2</h2>
<p>
    Criar o vetor abaixo, após imprimir seus valores utilizando a estrutura de repetição foreach.
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
    $vetor=["Nome"=>"Maria","Idade"=>17,"Altura"=>1.65];
    foreach ($vetor as $key => $value) {
        echo nl2br($key." => ".$value.PHP_EOL);
    }
?>