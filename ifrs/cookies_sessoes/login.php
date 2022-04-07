<?php
$login = filter_var($_REQUEST['login'], FILTER_SANITIZE_STRING);
$senha = filter_var($_REQUEST['senha'], FILTER_SANITIZE_STRING);

if(($login =='admin' && $senha=='1234') || ($login =='rafael' && $senha=='123456') ){
	session_start();
	$_SESSION['login']=$login;
	//$_SESSION['senha'] = $senha;
	header('location: inicial.php');
} else {
	header('location: form.php?msg=Login ou senha informados são inválidos');
}	
?>
