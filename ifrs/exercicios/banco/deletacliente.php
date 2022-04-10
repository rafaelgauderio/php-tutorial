<?php

$conexao = mysqli_connect('localhost', 'root' , '', 'clientes');

if(!$conexao) {
	die(mysqli_error($conexao));
}

$codpessoa=filter_var($_REQUEST['codpessoa'], FILTER_SANITIZE_NUMBER_INT);

$sql_delete= "DELETE FROM pessoa WHERE codpessoa = $codpessoa";
$result = mysqli_query($conexao,$sql_delete);
if(!$result) {
	die(mysqli_error($conexao));

} 
header('location:formcliente.php');


?>