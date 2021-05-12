<?php

function validaUsuario(array $usuario) {
	if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']) ) {
		return false;
	}

	return true;
}

$usuario = [
	'codigo' => 1,
	'nome'   => '',
	'idade'  => 27,
];

$usuarioValido = validaUsuario($usuario);

if (!$usuarioValido) {
	echo "Usuário inválido";
	return false;
}

echo "\n ... executando ... \n";