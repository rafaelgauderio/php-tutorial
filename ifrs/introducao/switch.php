<?php

$x=30;
$name="Rafael";

switch($x) {
	case 1: 	echo "Um"; break;
	case 10: 	echo "Dez"; break;
	case 20: 	echo "Vinte"; break;
	case 30: 	echo "Trinta"; break;
	default: 	echo "Outro valor"; break;

}
$x=500;
echo "<br>";
switch($x) {
	case 1: 	echo "Um"; break;
	case 10: 	echo "Dez"; break;
	case 20: 	echo "Vinte"; break;
	case 30: 	echo "Trinta"; break;
	default: 	echo "Outro valor"; break;

}

echo "<br>";
switch($name) {
	case "Rafael": 	echo "Rafael"; break;
	case "joao": 	echo "Joao"; break;
	default: 		echo "Outro Nome"; break;

}

?>