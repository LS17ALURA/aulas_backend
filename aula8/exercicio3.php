<h2>Ordenação  Alfabética</h2>
<ol>
<?php
$nomes=["Murilo","Poliana","Dalva","Lavinia","Camila","Kauã"];
//função para ordenção:
//usa o sort(); e pronto
sort($nomes);
for ($i=0; $i <= 4; $i++) { 
    echo "<li>".$nomes[$i]."</li>";
}
$nomes2=["Murilo","Poliana","Dalva","Lavinia","Camila","Kauã"];
//lógica por trás do sort
for ($c=0; $c <=5 ; $c++) { 
    for ($i=0; $i <=5 ; $i++) { 
        if ($nomes2[$c]<$nomes2[$i]) {
            $celBranco=$nomes2[$i];
            $nomes2[$i]=$nomes2[$c];
            $nomes2[$c]=$celBranco;
        }
    }
}
print_r($nomes2);
//lógica
if("a"<"b" && "b"<"g" )
    print(nl2br(PHP_EOL."Obs.: ordenação Funciona com a mesma lógica de númerais."));
?>
</ol>

