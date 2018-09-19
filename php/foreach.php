<?php

$arr = array("1","qualquer_coisa"=>"teste","2","3","4");

echo "foreach pegando só valor<br>";
foreach ($arr as $atual) {
	echo $atual."<br>";
}

echo "<br>foreach pegando só valor<br>";
foreach ($arr as $key => $el) {
	echo $key.", ".$el."<br>";
}

print_r($arr);
var_dump($arr);



?>