<?php
$cpf = $_POST['cpf'];

if(strlen($cpf) == 11){

	$soma1 = 0;
	$soma2 = 0;

	$num1 = 0;
	$num2 = 0;

	for($x = 10; $x > 1; $x--){
		$soma1 += $cpf[10 - $x] * $x;
		$soma2 += $cpf[10 - $x] * ($x + 1);
	}

	$div = intdiv($soma1 * 10, 11);

	$div = ($soma1 * 10) - ($div * 11);

	$num1 = $div;

	if($div == 10){
		$num1 = 0;
	}


	$soma2 += $num1 * 2;

	$div = intdiv($soma2 * 10, 11);

	$div = ($soma2 * 10) - ($div * 11);

	if($div == 10){
		$div = 0;
	}

	$num2 = $div;

	$cor = 'BFB';
	$escrita = 'É valido';

	if($cpf[9] != $num1 || $cpf[10] != $num2){
		$cor = "FBB";
		$escrita = 'É invalido';
	}
}else{
	$cor = "FBB";
	$escrita = 'É invalido';
}

echo "
		<!DOCTYPE html>
		<html>

		<head>
			<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>
			<style>
			a{
				text-decoration: none;
			}
			.verde{
				text-align: center;
				color: #$cor;
			}
			body{
				padding: 5vh;
				background-color: #000;
			}
			</style>
		</head>

		<body> 
			<a href='pag-cpf.html'>
			<h1 class='verde'>$escrita.</h1>
			</a>

		</body>

		</html>
		";
?>