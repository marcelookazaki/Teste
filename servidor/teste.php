<?php
	$_tel = $_POST['tel'];
	$conttel = strlen($_tel);

	$_cpf = $_POST['cpf'];
	$contcpf = strlen($_cpf);

	$erro = "";

	if($contcpf > 11){
		$erro .= "ERRO!, mais de 11 numeros";
	}
	else if($contcpf < 11){
		$erro.="/ERRO!, menos de 11 numeros.";
	}
	if($conttel > 9) {
		$erro .= "/Telefone com mais de 9 numeros";
	}
	else if($conttel < 8) {
		$erro .= "/Telefone com menos de 8 numeros";
	}

	if(empty($erro)) {
		$certo="Todos os dados corretos";				
		header('location: http://localhost:8080/index.php?lindo=true&msg=' . $certo);
	} else {
		header('location: http://localhost:8080/index.php?lindo=false&msg=' . $erro);
	}

?>