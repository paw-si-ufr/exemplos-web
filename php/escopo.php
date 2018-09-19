<?php
$a = 1;
$b = 2;

function soma()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}
 
function incremento()
{
	static $c = 0;
	$c++; 
	echo $c;
}

soma();
echo $b; //3
incremento(); //1
incremento(); //2
incremento(); //3
incremento(); //4
?>
