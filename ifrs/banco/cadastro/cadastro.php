<?php

$conexao = mysqli_connect('localhost', 'root' , '' , 'login');
$login= filter_var($_REQUEST['login'], FILTER_SANITIZE_STRING);
$senha= filter_var($_REQUEST['senha'], FILTER_SANITIZE_STRING);
$hash= password_hash($senha, PASSWORD_DEFAULT);
//$sql_insert = "INSERT INTO user (login,senha) VALUES ('$login','$hash')";
$sql_insert = "INSERT INTO user (login, senha) VALUES (?,?)";
$prepare = mysqli_prepare($conexao,$sql_insert);
mysqli_stmt_bind_param($prepare, 'ss',$login, $hash);
mysqli_stmt_execute($prepare);
$resultado = mysqli_stmt_get_result($prepare);
if(!$resultado) {
	header('location: formcadastro.php?msg=' . mysqli_error($conexao));	
	exit();
}

header('location: formlogin.php');



?>


