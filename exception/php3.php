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

validaUsuario($usuario);


echo "\n ... executando ... \n";