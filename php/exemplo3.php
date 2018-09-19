<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php
		$a = 10;
		$b = 15;
		$c = $a + $b; 
		echo "<h2> $a mais $b é igual a $c </h2>";


?>
   
<?php
	$cerveja = 'Skol';
	
	echo  "Ele bebeu $cervejas<br>"; 	// não funciona, pois há um "s" a mais
	echo "Ele bebeu algumas ${cerveja}s<br><br>";	// funciona
	echo "Ele bebeu algumas {$cerveja}s<br><br>";	// funciona
?>

	
</body>
</html>
