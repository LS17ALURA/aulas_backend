<h2>Estrutura de repetição for</h2>
<p>
    Utilizada para repetir uma sequência de instrução um predeterminado número de vezes.
</p>
<p>
    <pre>
        for(inicio; condicao; passo){
            //instruções a serem repetidas
        }
    </pre>
</p>
<?php
    
    for ($contador=0; $contador <= 10; $contador++) { 
        echo nl2br("2 x $contador =" . $contador*2 . PHP_EOL);
    }
    // transformar na tabuada completa
?>