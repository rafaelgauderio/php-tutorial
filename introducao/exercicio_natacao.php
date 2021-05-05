<?php

$categorias = [];

$categorias[] = 'fraldinha';
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

print_r($categorias);


echo("<br/>\n");

$nome = 'Rafael De Luca';
$idade = 35;


var_dump($nome);
var_dump($idade);

echo("<br/>\n");

if ($idade<0) {
	echo 'Tu informaste uma idade inválida';
} 

else if ($idade >=0 && $idade< 6) {
	for ($i =0; $i<=count($categorias); $i++) {
		if($categorias[$i] == 'fraldinha') 
			echo "O nadador ".$nome. " compete na categoria fraldinha";
		
	}
}

else if($idade>=6 && $idade <=12) {
	for($i=0; $i<=count($categorias); $i++) {
		if($categorias[$i] == 'infantil') 
			echo "O nadador ".$nome. " compete na categoria infantil";
		
	}	

}

else if($idade>12 && $idade <=18) {
	for($i=0; $i<=count($categorias) ; $i++) {
		if($categorias[$i] == 'adolescente') 
			echo "O nadador ".$nome. " compete na categoria " .$categorias[$i];
		
	}	
} 


else {
	echo 'O nadador é adulto';
		}
?>