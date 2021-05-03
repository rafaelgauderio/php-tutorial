<?php

$categorias = [];

$categorias[] = 'fraldinha';
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

print_r($categorias);

$nome = 'Rafael De Luca';
$idade = 29;

var_dump($nome);
var_dump($idade);

if ($idade<0) {
	echo 'Tu informaste uma idade inválida';
} 

if else ($idade >=0 && $idade< 6) {
	for ($i =0; $i<=count($categorias) ; i++) {
		if($categorias[$i] == 'fraldinha') {
			echo "O nadador ",$nome, " compete na categoria fraldinha";
		}
	}
}

else if($idade>=6 && idade <=12) {
	for($i=0; &i<=count($categorias) ; i++) {
		if($categorias[$i] == 'infantil') {
			echo "O nadador ",$nome, " compete na categoria infantil";
		}
	}	

}
 
else if(&idade>12 && idade <=18) {
	for($i=0; &i<=count($categorias) ; i++) {
		if($categorias[$i] == 'adolescente') {
			echo "O nadador ",$nome, " compete na categoria " .$categorias[$i];
		}
	}	
}

else {
	echo 'adulto';

?>