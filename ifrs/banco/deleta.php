<?php

$conexao = mysqli_connect('localhost', 'root' , '', 'produtos');

if(!$conexao) {
	die(mysqli_error($conexao));
}

$id=filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT);

$sql_delete= "DELETE FROM produto WHERE id = $id";
$result = mysqli_query($conexao,$sql_delete);
if(!$result) {
	die(mysqli_error($conexao));

} 
header('location:tabela.php');


?>