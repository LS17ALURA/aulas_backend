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
<h2>Estrutura de repetição while</h2>
<p>
    É utilizada para repetir uma sequ~encia de instruções, enquanto uma condição for verdadeira    
</p>
<p>
    <pre>
        while(condicao){
            //instruções a serem repetidas
        }
    </pre>
</p>
<div class="container";>
<?php
        $a2=1;
         //for ($contador=1; $contador <= 10; $contador++) {
        while ($a2 <= 10) {
        echo "<div>"."<p>";
        $a=0;
        //for ($contador2=0; $contador2 <= 10; $contador2++) { 
            while ($a <= 10) {
                echo nl2br("&nbsp;&nbsp;&nbsp;&nbsp;$a x $a2 =" . $a*$a2 . PHP_EOL);
                $a++;
            
        }        
        echo "</div>";
        $a2++;
     }
?>
</div>