<html lang="pt-br">
<head>
<meta charset="UTF-8">

<style>

body,html {	

	margin: 0px;
	padding: 5px;
	border: 2px solid black;
	border-radius: 5px;
	background: linear-gradient(to bottom, #eea 0%, #00FFFF 100%);}

h2 {
	font-size: 15px;
}

table {
	border:2px solid green;
	border-width: thick;

}

td {
	padding: 5px;
	border: 2px solid black;
	text-align: center;

} 

th{
	text-align: center;
	border: 3px solid red;
}

a {
	padding: 5px;
	border-radius: 5px;
	border: 2px solid black;
	font-family: 'Arial Black';
	background-color: white;
	-moz-transition: all 0.3s;
	-webkit-transition: all 0.3s;
	transition: all 0.3s;
	font-size: 12px;
	
}

:hover a {
  	-moz-transform: scale(1.5);
	-webkit-transform: scale(1.5);
	transform: scale(1.5);
}


</style>

</head>



<?php

$conexao = mysqli_connect('localhost','root','','produtos');


if(!$conexao) {
	die(mysqli_error($conexao));
}	

?>
<html>
<body>

<h2>Tabela de Produtos</h2>

<?php

$sql_produtos = ('SELECT * FROM produto');
$result=mysqli_query($conexao,$sql_produtos);
echo "<table >\n";
echo "<tr><th>Produto</th><th>Descrição</th><th>Quantidade</th><th>Excluir</th></tr>\n";

while($linha=mysqli_fetch_assoc($result)) {

	echo "<tr><td>" . $linha['nome'] . "</td><td>" . $linha['descricao'] . "</td><td>" . $linha['qtd'] . "</td><td><a href='deleta.php?id=" . $linha['id']. "'>X</a></td></tr>\n";
}

echo "</table>\n";
echo "<br>";

?>

<a href="forminsert.php">Formulário de inserção</a>
</body>

</html>