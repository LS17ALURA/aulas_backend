<?php
    // $r=$_GET['numero']+$_GET['n2'];
    // echo $r;
    if (isset($_GET["numero"]) && isset($_GET["n2"])) {
        $r = $_GET["numero"]+$_GET["n2"];
        echo $r;
    }else{
        // echo "Você precisa informar os valores para somar";
        // faz um redorecionamento
        header("Location:form1.html");
    }
?>
