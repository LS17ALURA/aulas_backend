<?php
    $cores=["yellow","green","blue","pink","red","purple","orange","gray","white"];
    if (isset($_GET["cor"])) {
        $cor=$_GET["cor"];
    }else{
        $cor="white";
    }

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>links com cor</title>
    <style>
        body{background-color:<?php echo $cor; ?>}
    </style>
</head>
<body>
<?php
   
    foreach ($cores as $key => $cor) {
        echo "<a href='pagina.php?cor=$cor'>Mudar para $cor.</a><br>";
    }
?>
   
</html>