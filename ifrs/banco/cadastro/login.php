<?php

$conexao = mysqli_connect('localhost', 'root' , '' , 'login');
$login = filter_var($_REQUEST['login'], FILTER_SANITIZE_STRING);
$senha =filter_var($_REQUEST['senha'], FILTER_SANITIZE_STRING);
//$sql_select = "SELECT * FROM user WHERE login = '$login'";
$sql_select = "SELECT * FROM user WHERE login = ?";
$prepare = mysqli_prepare($conexao,$sql_select);
mysqli_stmt_bind_param($prepare,'s',$login);
mysqli_stmt_execute($prepare);
$resultado=mysqli_stmt_get_result($prepare);
//$resultado = mysqli_query($conexao,$sql_select);
if (mysqli_num_rows($resultado)==1) {
	$linha = mysqli_fetch_assoc($resultado);
	if(password_verify($senha, $linha['senha'])) {
		session_start();
		$_SESSION['login'] = $login;
		header('location:inicial.php');
		exit();
	}  else {
		header('location: formlogin.php?msg=Login ou senha inválido');
	} 
} else {
	header('location: formlogin.php?msg=Login ou senha inválido');
}


?>





