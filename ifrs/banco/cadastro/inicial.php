<?php

session_start();
if(!$_SESSION['login']) {
	header('location:formlogin.php');
	exit();
}
echo "Seja bem vindo " . $_SESSION['login'] . "!<br>Segue abaixo os dados da sua conta.<br>";

?>

<a href="logout.php">Logout </a>





