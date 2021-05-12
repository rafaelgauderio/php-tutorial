<?php

function validaUsuario(array $usuario) {
	if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']) ) {
		throw new Exception("Campos obrigatórios não foram preenchidos");
	}

	return true;
}

$usuario = [
	'codigo' => 1,
	'nome'   => '',
	'idade'  => 27,
];

try {
	$status = validaUsuario($usuario);

}

catch (Exception $error) {
	echo $error->getMessage();
	
}

echo "\n ... executando ... \n";


