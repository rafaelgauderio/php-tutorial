<?php

if($_REQUEST['nome'] == '' || $_REQUEST['email'] == '') {
  header('Location: cadastro.html');	
}



$nome=filter_var($_REQUEST['nome'],FILTER_SANITIZE_STRING);
echo "Nome: " . $nome . "<br>";

$email=@filter_var($_REQUEST['email'],FILTER_SANITIZE_STRING,FILTER_VALIDATE_EMAIL);
if(FILTER_VALIDATE_EMAIL==true) {
	echo "Email: " . $email . "<br>";
} else {
	header('Location: cadastro.html');
}


$sexo=@filter_var($_REQUEST['sexo'],FILTER_SANITIZE_STRING);
echo "Sexo: " . $sexo . "<br>";

$datanasc=@filter_var($_REQUEST['datanasc'], FILTER_SANITIZE_STRING);
$datavalidada=explode('-',$datanasc);
$year=$datavalidada[0];
$month=$datavalidada[1];
$day=$datavalidada[2];

if(checkdate($month,$day,$year)==true) {
  echo "Data de nascimento: (yyyy-mm-dd) " . $datanasc . "<br>";  
} else {
    header('Location: cadastro.html');
}



$endereco=@filter_var($_REQUEST['endereco'], FILTER_SANITIZE_STRING);
echo "Endereço: " . $endereco . "<br>";

$bairro=@filter_var($_REQUEST['bairro'], FILTER_SANITIZE_STRING);
echo "Bairro: " . $bairro . "<br>";

$estado=@filter_var($_REQUEST['estado'], FILTER_SANITIZE_STRING);
echo "Estado: " . $estado . "<br>";

$cidade=@filter_var($_REQUEST['cidade'], FILTER_SANITIZE_STRING);
echo "Cidade: " . $cidade . "<br>";

$cep=@filter_var($_REQUEST['cep'], FILTER_SANITIZE_STRING);
echo "CEP: " . $cep . "<br>";

$receber=@filter_var($_REQUEST['receber'], FILTER_SANITIZE_STRING);
echo "Receber e-mails: " . $receber . "<br>";	


?>