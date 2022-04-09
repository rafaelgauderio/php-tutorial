<?php

//php tem conversão automatica de variáveis
//vai converter as strings para inteiro e fazer as operações

echo "<br>Conversões automáticas. true=1, false=0<br>";
echo 3 * '10';
echo "<br>" . true * '40';
echo "<br>" . false * '40' . "<br>";

//vai conveter para 1+2==3 
if( '1 cachorro' + '2 humanos' == '3 mamiferos')  {
	echo "<b>Verdadeiro</b>";
}

//Se usar 3 iguais ele vai entender que não é para converter
if( '1 cachorro' + '2 humanos' === '3 mamiferos')  {
	echo "<br><b>São identicos</b>";
} else {
	echo "<br><b>Não é igual</b>";
}


//Se usar 3 iguais ele vai entender que não é para converter
//=== tem que ser mesmo tipo da variável e mesmo valor
if( '1 cachorro'  === '1 cachorro')  {
	echo "<br><b>São identicos!</b>";
} else {
	echo "<br><b>Não é igual!</b>";
}

?>