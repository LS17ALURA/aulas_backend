<style>
    div{
        border: 1px solid #000;
    }
    .container{
        display: grid;
        grid-template-rows: auto auto ;
        grid-template-columns: auto auto auto auto auto;
    }
    .tabuada{
        text-align: justify;
    }
</style>
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
<div class="container">
<?php
        //valor inicial; condição de parada; step -> passo
    for ($contador=1; $contador <= 10; $contador++) { 
        echo "<div class='tabuada'>"."<p>";
        for ($contador2=0; $contador2 <= 10; $contador2++) { 
            echo nl2br("&nbsp;&nbsp;&nbsp;&nbsp;$contador x $contador2 =" . $contador*$contador2 . PHP_EOL);
            
        }        
        echo "</div>";
     }
?>
</div>