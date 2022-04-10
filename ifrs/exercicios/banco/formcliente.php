<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<style>

	html {	
		font-family: "arial";
		height: 100%;
		margin: 0px;
		padding: 5px;
		border: 2px solid black;
		border-radius: 5px;
		background: linear-gradient(to bottom, #eea 0%, #00FFFF 100%);

	}

	table {
		border:1px solid green;
		border-width: thick;

	}

	td {
		padding: 5px;
		border: 2px solid black;
		text-align: center;

	} 

	td a {
		color:black;
	}

	th{
		text-align: center;
		border: 1px solid black;
	}

	a {
		padding: 5px;
		border-radius: 5px;
		border: 2px solid black;
		font-family: 'Arial Black';
		background-color: white;	
		font-size: 12px;
		text-decoration: none;

	}

	a:hover {
		background-color: green;
		font-size: 16px;
		color:white;
		border: 3px solid silver;
	}


	h2 {
		background-color: #48d1cc;
		border-radius: 10px;
		padding: 5px;
		border:1px solid black;
		background: linear-gradient(to bottom, #48d1cc 0%, #00ced1 100%);
		font-size: 14px;


	}

	form {
		margin: 5px;
		padding: 5px;
		border:1px solid black;
		border-radius: 5px;
		background: linear-gradient(to bottom, #eea 0%, #00FFFF 100%);


	}

	input {
		padding: 3px;	
		border: 2px solid black;
		border-radius: 4px;
		cursor:pointer;


	}

	input[type=submit]:hover {
		
		background-color: green;
		font-size: 20px;
		color:white;
		border: 3px solid black;

	}
	

	label {
		width:180px;
		display: inline-block;
	}

	</style>

</head>

<html>
<body>
	<h2>Inserção de Clientes no Banco de Dados</h2>
	<form  enctype="multipart/form-data" method="post" action="insertcliente.php">
		<fieldset>
			<legend>Dados do formulário</legend>
			<label>Nome:<input name="nome" placeholder="nome" required></label><br>
			<label>Endereco:<input name="endereco" placeholder="endereço" required></label><br>
			<label>Telefone:<input type="tel" name="telefone" placeholder="telefone" required></label>						
		</fieldset>
		<br>
		<label><input type="submit" value="Inserir Cliente"></label>

	</form>

	<?php

	$conexao = mysqli_connect('localhost','root','','clientes');


	if(!$conexao) {
		die(mysqli_error($conexao));
	}	

	?>


	<h2>Tabela de Clientes</h2>

	<?php

	$sql_pessoa = ('SELECT * FROM pessoa');
	$result=mysqli_query($conexao,$sql_pessoa);
	echo "<table >\n";
	echo "<tr><th>Nome</th><th>Endereco</th><th>Telefone</th><th>Excluir</th></tr>\n";

	while($linha=mysqli_fetch_assoc($result)) {

		echo "<tr><td>" . $linha['nome'] . "</td><td>" . $linha['endereco'] . "</td><td>" . $linha['telefone'] . "</td><td><a href='deletacliente.php?codpessoa=" . $linha['codpessoa']. "'>X</a></td></tr>\n";
	}

	echo "</table>\n";
	echo "<br>";

	?>


</body>
</html>

