<h2>Operadores lógicos</h2>
<hr>
<p>São utilizado para avaliar uma expressão formada por um conjunto de operadores lógicos.</p>
<ul>
    <li>and | E</li>
    <li>or  | OU</li>
    <li>&&  | E</li>
    <li>||  | OU</li>
    <li>!   | NÃO</li>
    <li>xor | OU Exclusivo</li>
</ul>

<h3>Tabela verdade - E</h3>

<table border="1" width="20%">
    <thead>
    <tr>
        <th colspan="3">Tabela do E </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>V</td>
        <td>V</td>
        <td>V</td>
    </tr>
    </tbody>
    <tr>
        <td>V</td>
        <td>F</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
        <td>F</td>
    </tr>
</table>
<br>
<strong>Exemplo</strong>
<p>Múrilo disse a Bruna que iria ao parque se:</p>
<ol>
    <li>Domingo estivesse de sol;</li>
    <li>Tivesse realizado todas as atividades do IF;</li>
</ol>
<?php
    $condicao1=true;
    $condicao2=false;
    $acao_murilo=$condicao1&& $condicao2;
    var_dump($acao_murilo);
?>
<br><br>
<table border="1" width="20%">
    <thead>
    <tr>
        <th colspan="3">Tabela do OU </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>V</td>
        <td>V</td>
        <td>V</td>
    </tr>
    </tbody>
    <tr>
        <td>V</td>
        <td>F</td>
        <td>V</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
        <td>F</td>
    </tr>
</table>
<br>
<strong>Exemplo</strong>
<p>Múrilo disse a Bruna que iria ao parque se:</p>
<ol>
    <li>Domingo estivesse de sol;</li>
    <li>Tivesse realizado todas as atividades do IF;</li>
</ol>
<?php
    $condicao1=true;
    $condicao2=false;
    $acao_murilo=$condicao1 || $condicao2;
    var_dump($acao_murilo);
?><br><br>
<table border="1" width="20%">
    <thead>
    <tr>
        <th colspan="3">Tabela do NÃO</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>V</td>
        <td>F</td>
    </tr>
    </tbody>
    <tr>
        <td>V</td>
        <td>F</td>
    </tr>
 
</table>
<br>
<strong>Exemplo</strong>
<p>Múrilo é um cara legal.</p>
<?php
    $condicao1=true;
    $acao_murilo=!(!$condicao1);
    var_dump($acao_murilo);
?>