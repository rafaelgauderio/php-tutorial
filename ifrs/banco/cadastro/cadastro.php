<?php

$conexao = mysqli_connect('localhost', 'root' , '' , 'login');
$sql_insert = "INSERT INTO user (login,senha) VALUES ('$_REQUEST[login]','$_REQUEST[senha]')";


mysqli_query($conexao,$sql_insert);
header('location: formlogin.php');



?>


