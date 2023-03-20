<?php
    $x=$_GET['x'];
    $a=1;
    for ($a=1; $a <= 10; $a++) { 
            echo nl2br("&nbsp;&nbsp;&nbsp;&nbsp;$a x $x =" . $a*$x . PHP_EOL);   
    }        
?>