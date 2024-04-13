<?php
$valor = intval($_GET['n']);
$total = 0;
$qtddiv = 0;
$elprimo = true;

$corParBG = "#844"; //Red
$corPar = "#F00";//Red

$corImpar = "#0F0";//Green
$corImparBG = "#8A8";//Green

$par = 'Não';
$impar = 'Sim';

if ($valor % 2 == 0){
    $corPar = "#0F0";//Green
    $corParBG = "#8A8";//Green

    $corImparBG = "#844";//Red
    $corImpar = "#F00";//Red

    $par = 'Sim';
    $impar = 'Não';
}

$perfeito = 'Não';

$corPerfeitoBG = "#844"; //Red
$corPerfeito = "#F00";//Red

for ($i=1; $i < $valor; $i++) {
    if ($valor % $i == 0) {
      $total = $total + $i;
    }
}
    
if ($total == $valor) {
    $perfeito = 'Sim';
    $corPerfeitoBG = "#8A8"; //Green
    $corPerfeito = "#0F0";//Green
}

for ($i=1; $i < $valor; $i++) {
    if ($valor % $i == 0) {
            $qtddiv ++;
    }
}


$primo = 'Nao';
$corPrimoBG = "#844"; //Red
$corPrimo = "#F00";//Red

for ($i = 2; $i < $valor; $i++) {
    if ($valor % $i == 0) {
        $elprimo = false;
        break;
    }
}
    
if ($elprimo) {
    $primo = 'Sim';
    $corPrimoBG = "#8A8";//Green
    $corPrimo = "#0F0";//Green
}

$qtddiv++;

//UKI UKI UKI UKI UKI
echo "
<!DOCTYPE html>
<html>
<head>
    <title>Testador de números</title>
    <link rel='stylesheet' href='style.css'>
    <script src='modo-visualizacao.js'></script> 
    <style>
        .Par{
            background-color: $corParBG;
            color: $corPar;
        }
        .Impar{
            background-color: $corImparBG;
            color: $corImpar;
        }
        .Perfeito{
            background-color: $corPerfeitoBG;
            color: $corPerfeito;
        }
        .Azul{
            background-color: #883;
            color: #FF5;
        }
        .Primo{
            background-color: $corPrimoBG;
            color: $corPrimo;
        }
    </style>
</head>

<body>
<header>
<nav>
    <a href='principal1.html'>Inicio</a>
    <a href='1ano.html'>1°Anos</a>
    <a href='2ano.html'>2°Anos</a>
    <a href='3ano.html'>3°Anos</a>
</nav>
</header>
<div class='principal'>
<table>
<tr>
<th>Verificações</th>
<th>Resultados</th>
</tr>

<tr>
<td>Par</td>
<td class='Par'>$par</td>
</tr>

<tr>
<td>Impar</td>
<td class='Impar'>$impar</td>
</tr>

<tr>
<td>Perfeito</td>
<td class='Perfeito'>$perfeito</td>
</tr>

<tr>
<td>Primo</td>
<td class='Primo'>$primo</td>
</tr>

<tr>
<td>Quantidade de Divisores</td>
<td class='Azul'> $qtddiv(
";

for ($i=1; $i < $valor; $i++) {
    if ($valor % $i == 0) {
        echo "$i, ";
    }
}

echo "
$valor
)</td>
</table>
</div class='principal'>
</body>
</html>
";
?>