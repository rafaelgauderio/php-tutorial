
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<head>

<style>

	body {
		font-family: "Arial Black", "Arial";
		font-size: 12px;
		
	}

	h1 {
		background-color: #48d1cc;
		border-radius: 10px;
		padding: 5px;
		border:1px solid black;
		background: linear-gradient(to bottom, #48d1cc 0%, #00ced1 100%);
		font-size: 15px;
		

	}

	form {
		margin: 10px;
		padding: 10px;
		border:1px solid black;
		border-radius: 5px;
		background: linear-gradient(to bottom, #eea 0%, #00FFFF 100%);
		 

	}


	
</style>

<body>
	<h1>Tabela de Produtos</h1>

</body>
</html>

<?php

$conexao = mysqli_connect('localhost', 'root' , '', 'produtos');

if(!$conexao) {
	die(mysqli_error($conexao));
}

$nome=filter_var($_REQUEST['nome'], FILTER_SANITIZE_STRING);
$descricao=filter_var($_REQUEST['descricao'], FILTER_SANITIZE_STRING);
$qtd=filter_var($_REQUEST['quantidade'],FILTER_SANITIZE_NUMBER_INT);

$sql_insert = "INSERT INTO produto(nome,descricao,qtd) VALUES ('$nome','$descricao','$qtd')";
//echo $sql;
$result = mysqli_query($conexao,$sql_insert);
if(!$result) {
	die(mysqli_error($conexao));

} 
header('location:tabela.php');


?>
