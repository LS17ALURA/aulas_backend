<h2>Exercício 2</h2>
<p>Crie o vetor com os nomes, conforme exemplo abaixo:</p>
<pre>
    +---------+
  0 |Murilo   |
    +---------+
  1 |Poliana  |
    +---------+
  2 |Dalva    |
    +---------+
  3 |Lavinia  |
    +---------+
  4 |Kauã     |
    +---------+
</pre>
<?php
    $nomes=["Murilo", "Poliana","Dalva", "Lavinia", "Kauã"];
?>
<p>Imprima os nomes do vetor em formato de lista ordenada:</p>
<p> Ex.:</p>
<p> 1. Murilo
    2. Poliana
    3. ...
</p>
<ol>
<?php
    for ($i=0; $i <= 4; $i++) { 
        echo "<li>".$nomes[$i]."</li>";
    }
?>
</ol>