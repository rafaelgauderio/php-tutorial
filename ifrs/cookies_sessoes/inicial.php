<?php
session_start();

if(!$_SESSION['login']) {
	header('location:form.php');
	exit();
}

?>

Usuário logado, <?=@$_SESSION['login']?><br>

<a href="logout.php">Logout</a>