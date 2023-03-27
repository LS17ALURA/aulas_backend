<?php

    if (isset($_POST["cor"])) {
        $c=$_POST["cor"];
        echo "<style>body{background-color:$c}</style>"; 
    }
           
?>