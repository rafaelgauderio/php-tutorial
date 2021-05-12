<?php

function validaUsuario(array $usuario) {
	if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']) ) {
		throw new Exception("Campos obrigatórios não foram preenchidos");
	}

	return true;
}

$usuario = [
	'codigo' => 1,
	'nome'   => '', // se preenchear a propriedade nome não acontece mais a exceção
	'idade'  => 27,
];

try {
	$status = validaUsuario($usuario);

}

catch (Exception $error) {
	echo $error->getMessage();
	
}

finally {
	echo "Status da operação: " . (int)$status;
	die();
}

echo "\n ... executando ... \n";