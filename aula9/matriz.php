<h2>Matriz</h2>




<?php

    $produto1 = ["nome" => "Notebook", "marca" => "Dell", "preco" => "5000"];
    $produto2 = ["nome" => "Camera", "marca" => "lg", "preco" => "1000"];
    $produto3=  ["nome" => "Iphone", "marca" => "Aplee", "preco" => "11.000"];
    $produto4=  ["nome" => "Roupinhas da Shein", "marca" => "Shein", "preco" => "0.20"];

    $tabela = [$produto1, $produto2, $produto3, $produto4];

    print_r($tabela);
    echo "<BR><BR>";
    echo $tabela[1]["marca"];

    //json - Javascript Object notation 
    echo "<br><br><br><br>";
    echo json_encode($tabela);
?>