<?php

$conexao = mysqli_connect('localhost', 'root' , '' , 'login');
$sql_select = "SELECT * FROM user WHERE login = '$_REQUEST[login]' AND senha='$_REQUEST[senha]'";
$resultado = mysqli_query($conexao,$sql_select);

if (mysqli_num_rows($resultado)==1) {
	session_start();
	$_SESSION['login'] = $_REQUEST['login'];
	header('location:inicial.php');
	exit();
} else {
	header('location: formlogin.php?msg=Login ou senha inválido');
}


?>





