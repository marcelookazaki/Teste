<html>
<head>
	<title>teste</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="teste.css"/>
	<script src="teste.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<header>
		<h1>TESTE</h1>
	</header>
	<?php
		if(isset($_GET['lindo'])) {
			if($_GET['lindo'] == "true") {
	?>
				<div class="alert alert-success"><?= $_GET['msg'] ?></div>
	<?php
			} else {
				//pega a atributo msg da url e armazena em uma variavel no caso $erro
				$erro = $_GET['msg'];

				//separa a string em um array pela /
				$array = explode('/',$erro);

				//deleta os valores vazios do array
				$array = array_filter($array);

				//Cria a varivel de lista de erros
				$listaErro = "";

				
				/*for($i = 0; $i > 10; $i++) {
					$listaErro .= "<li>" . $array[$i] . "</li>";;
				} 
*/
				//Percorre todo o array 
				foreach($array as $a) {
					//Concate o erro com a tag li para mostrar na tela o erro em formato de lista
					$listaErro .= "<li>" . $a . "</li>";
				}

				// echo "<pre>";
				// var_dump($array);
				// die;
	?>
				<div class="alert alert-danger">
					<ul>
						<?= $listaErro ?>
					</ul>
				</div>
	<?php
			}
		}
	?>
	<form name="f1" action="servidor/teste.php" method="post">
	<div class="meio">
		<ul>
		<li><label>Nome: </label></li>	
			<input type="text" name="nome" maxlenght="9"></li>	
		<li><label>CPF: </label></li>	
			<input type="text" name="cpf" maxlenght="11"></li>	
		<div id="des1">	
			<li><label>Telefone: </label></li>
				<input type="text" id="tel" name="tel" placeholder="(00)0000-0000" size="13" onblur="destel()" ></li>
			<li><label>Celular: </label></li>	
				<input type="text" id="cel" name="cel" placeholder="(00)0000-0000" size="14" onblur="destel()" ></li>	
			</ul>
		</div>	

		<div id="btn">
			<input type="submit" name="btncastrar" value="Cadastrar" onclick="cadastrar()"/>
		</div>
		</div>	
	</form>

	<?php
		echo $contcpf = $_POST['cpf'];
	?>

</body>
</html>