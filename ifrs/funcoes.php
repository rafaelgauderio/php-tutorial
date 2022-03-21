<?php

$x=10;

function dobrar(int $x):int {

	return 2* $x;
}

echo "O dobro de $x é " . dobrar($x) . ".";
echo "<br>O dobro de 50 é " . dobrar(50) . ".";


$idade=25;

function verificarMaioridade(int $idade):bool {
	if($idade >= 18)  {
		return true;
	} else {
		return false;
	}
	
}

$name="Rafael De Luca";
function imprimeNome(string $nome):string {
	
	return "<br>O nome informado foi " .($nome) . "!<br>";
}

echo imprimeNome($name);

echo "<br>" . verificarMaioridade($idade);
echo "<br>" . verificarMaioridade(7);
echo "<br>" . verificarMaioridade(30);


//var_dump mostra o tipo da variável o e valor dela
echo "<br>";
var_dump($idade);
echo "<br>";
var_dump(verificarMaioridade(5));
echo "<br>";


?>