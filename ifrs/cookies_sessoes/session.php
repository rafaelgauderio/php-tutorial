<?php
// Seção a info não fica gravada no navegador.
// Fica gravada no servidor
// Fechar o navegador encerra a sessão
session_start();

$_SESSION['visitado'] = 1;


if($_SESSION['visitado']) {

	echo "Que bom que volstaste pra página";
} else {
	echo "Seja bem-vindo";
}


?>