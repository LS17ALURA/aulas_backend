<h2>Operadores Aritméticos</h2>
<hr>
<p>
    São utilizados para realizar os cálculos matemáticos.
</p>
<pre>
    tr => table row => linha da tabela
    td => table data => dados da tabela
</pre>
<table border="1" width="100%">
    <thead>
    <tr>
        <th>Operador</th>
        <th>Descrção</th>
        <th>Exemplo</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>+</td>
        <td>Soma</td>
        <td>$soma = 10 +5;</td>
    </tr>
    </tbody>
    <tr>
        <td>-</td>
        <td>Subtração</td>
        <td>$sub = 10 - 5;</td>
    </tr>
    <tr>
        <td>*</td>
        <td>Multiplicação</td>
        <td>$multi = 10 * 5;</td>
    </tr>
    <tr>
        <td>/</td>
        <td>Divisão</td>
        <td>$div = 10 / 5;</td>
    </tr>
    <tr>
        <td>%</td>
        <td>Resto</td>
        <td>$resto = 10 * 5;</td>
    </tr>
    <tr>
        <td>**</td>
        <td>Poteciação</td>
        <td>$pot = 10 ** 5;</td>
    </tr>
</table>
<p>Obs.: PHP_EOL e /n não funcionam quando você roda o php no navegador a menos que você use a função <font color="red">nl2br()</font>. 
Além desse meio, você pode optar por usar a tag "< br >".</p>
<?php
    $soma = 10 +5;
    $sub = 10 - 5;
    $multi = 10 * 5;
    $div = 10 / 5;
    $resto = 10 * 5;
    $pot = 10 ** 5;

    echo nl2br("Soma: $soma". PHP_EOL);
    echo nl2br("Subtração: $sub". PHP_EOL);
    echo nl2br("Multipliacação: $multi". PHP_EOL);
    echo nl2br("Divisão: $div". PHP_EOL);
    echo nl2br("Resto: $resto". PHP_EOL);
    echo nl2br("Potenciação: $pot". PHP_EOL);
?>

