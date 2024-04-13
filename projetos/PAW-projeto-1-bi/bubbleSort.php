<?php

$string = $_GET['numeros'];//pegar com método get
$nums = explode(",", $string);//separa

$len = count($nums);//items array

for($x = 0; $x < $len; $x++){
	for($y = 0; $y < $len - 1; $y++){
		if($nums[$y] > $nums[$y + 1]){
			$a = $nums[$y + 1];//temporario
			$nums[$y + 1] = $nums[$y];
			$nums[$y] = $a;
		}
	}
}

echo"
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <style>
            .bubblesort{
                color: white;
                
            }

            .titulo{
                color: burlywood;
            }

            body{
                background-color: rgb(32, 29, 29);
                text-align: center;
                font-family: Arial;
            }

    </style>

</head>
<body>
<a href='pag-cpf.html'>
    <h1 class='titulo'>BUBBLE SORT</h1><br></a>
    <div class='bubblesort'>";
for($x = 0; $x < $len; $x++){
	$y = $nums[$x];
	echo "$y <br>";
}

echo"
    </div>
</body>
</html>
";
?>