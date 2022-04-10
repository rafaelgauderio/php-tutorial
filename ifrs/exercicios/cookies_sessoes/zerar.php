<?php

//$contador=filter_var($_REQUEST['nome'],FILTER_SANITIZE_STRING);
$arquivo=fopen("visitantes.txt","w");
$contador=-1;
fwrite($arquivo,$contador);
fclose($arquivo);
header('Location: contador.php');
?>

