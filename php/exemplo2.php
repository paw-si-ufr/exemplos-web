<?php 

	$professor="João";

	function exemplo() {
		echo "<br />escopo global: ".$GLOBALS['professor'];
		$GLOBALS['professor']="Jivago";
	}

	exemplo();

	echo "<br />Após chamada da função: ".$professor;

?>