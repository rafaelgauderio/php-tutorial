
<?php

$conexao = mysqli_connect('localhost','root','','testephp');


if(!$conexao) {
	die(mysqli_error($conexao));
}	


$sql_insert = ("INSERT INTO produto (nome,descricao,qtd) VALUES('Fanta','Refri Fanta laranja 600ml',20)");
$resultado=mysqli_query($conexao,$sql_insert);

print_r($resultado);



?>