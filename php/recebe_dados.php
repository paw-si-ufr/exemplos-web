<?php 
            
	if (isset($_POST['primeiro-nome']) && !empty($_POST['primeiro-nome'])) { //uma validação bem simples
		$nome_completo = $_POST['primeiro-nome']." ".$_POST['segundo-nome'];
	}
	else {
		$nome_completo = "Você não preencheu o primeiro nome!";
	}
            
	$sexo = $_POST['sexo'];
	if ($sexo=="F") {
		$sexo="Feminino";
	}
	else if ($sexo=="M") {
		$sexo="Masculino";
	}
	else {
		$sexo="-";
	}  	

	$cidade = $_POST["list-cidade"];
	if ($cidade==1) {
		$cidade="Cuiabá";
	}
	else if ($cidade==2) {
		$cidade="Várzea Grande";
	}
	else {
		$cidade="-";
	}
            	
	$endereco = $_POST['endereco']."<br />".$cidade;

	echo "<h1>Seus Dados</h2>";
	echo "<p><strong>Nome completo:</strong>&nbsp;"."</p>";
	echo "<p><strong>Sexo:</strong>&nbsp;".$sexo."</p>";
	echo "<p><strong>Endereço:</strong><br />".$endereco."</p>";
            	
?>