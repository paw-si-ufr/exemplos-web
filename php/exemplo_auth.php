<?php

session_start();

if($_SESSION['logado']==1){
	echo "já está logado!";
}else{

if (isset($_POST["usuario"]) && isset($_POST["senha"])){

		$_SESSION['user'] = $_POST["usuario"];
		$_SESSION['pass'] = $_POST["senha"];

	if($_SESSION['user'] == "cslaviero" && $_SESSION['pass']=='senha'){
		echo "LOGIN ACEITO";
		$_SESSION['logado'] = '1';
	}
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		<input name='usuario' type='text'><br>
		<input name='senha'	type='password'><br>
		<input type='submit'>
	</form>
	
</body>
</html>