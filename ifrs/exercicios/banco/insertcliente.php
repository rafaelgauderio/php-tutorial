
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<head>

<?php

$conexao = mysqli_connect('localhost', 'root' , '', 'clientes');

if(!$conexao) {
	die(mysqli_error($conexao));
}

$nome=filter_var($_REQUEST['nome'], FILTER_SANITIZE_STRING);
$endereco=filter_var($_REQUEST['endereco'], FILTER_SANITIZE_STRING);
$telefone=filter_var($_REQUEST['telefone'],FILTER_SANITIZE_NUMBER_INT);

$sql_insert = "INSERT INTO pessoa(nome,endereco,telefone) VALUES ('$nome','$endereco','$telefone')";

$result = mysqli_query($conexao,$sql_insert);
if(!$result) {
	die(mysqli_error($conexao));
} 
header('location:formcliente.php');

?>
