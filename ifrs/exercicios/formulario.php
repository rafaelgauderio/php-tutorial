<?php

if($_REQUEST['nome'] == '' || $_REQUEST['email'] == '') {
  header('Location: formulario.php');	
}



$nome=filter_var($_REQUEST['nome'],FILTER_SANITIZE_STRING);
echo $nome . "<br>";

$email=@filter_var($_REQUEST['email'],FILTER_SANITIZE_STRING,FILTER_VALIDATE_EMAIL);
echo $email . "<br>";

$sexo=@filter_var($_REQUEST['sexo'],FILTER_SANITIZE_STRING);
echo $sexo . "<br>";

$datanasc=@filter_var($_REQUEST['datanasc'], FILTER_SANITIZE_STRING);
$datavalidada=explode('-',$datanasc);
$year=$datavalidada[0];
$month=$datavalidada[1];
$day=$datavalidada[2];

if(checkdate($month,$day,$year)==true) {
  echo $datanasc . "<br>";  
} else {
    echo "Foi informada uma data invalida!<br>";
}



$endereco=@filter_var($_REQUEST['endereco'], FILTER_SANITIZE_STRING);
echo $endereco . "<br>";

$bairro=@filter_var($_REQUEST['bairro'], FILTER_SANITIZE_STRING);
echo $bairro . "<br>";

$estado=@filter_var($_REQUEST['estado'], FILTER_SANITIZE_STRING);
echo $estado . "<br>";

$cidade=@filter_var($_REQUEST['cidade'], FILTER_SANITIZE_STRING);
echo $cidade . "<br>";

$cep=@filter_var($_REQUEST['cep'], FILTER_SANITIZE_STRING);
echo $cep . "<br>";

$receber=@filter_var($_REQUEST['receber'], FILTER_SANITIZE_STRING);
echo $receber . "<br>";	


?>