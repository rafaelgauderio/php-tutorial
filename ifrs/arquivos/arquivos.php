<?php

if (file_exists('visitantes.txt')==1) {

	$arquivo = fopen('visitantes.txt',"r") {
	$contador=fread($arquivo,50); //arquivo com 50 bytes de tamanho
	$contador++;
	$arquivo=fopen("visitantes.txt","w");
	fwrite($arquivo,$contador);
	fclose($arquivo);
}
	echo "<br>Número todal de visitas: " . $contador . "<br." 







?>