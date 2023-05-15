<?php
    // print_r($_GET);
    /* http://localhost/3infoa/lavinia/aula12/get/exemploGet.php?numero1=10&numero2=20
    Um request é feito ao servidor para buscar os índices numero1, numero2.
    - ? => serve para separar url dos daods que vão ser enviados para o servidor;
    - $ => serve para separar uma variável de outra  variável;
    */
    $resultado=$_GET["numero1"]+$_GET["numero2"];
    echo "O resultado da soma é $resultado";
    /* Armazena o resultado da soma dos valores armazenados nos índices buscados pelo GET e depois exime o resultado.
    */
?>