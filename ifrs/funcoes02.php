<?php

$arr = [1,73,13,19,8,41,55,5];

//contar elementos
echo count ($arr);
echo "<br>";

//soma de elementos
echo array_sum($arr) . "<br>";;


//explode transforma uma string em um array
$string = "1|5|4|6|9|final";
$array_de_string = explode('|',$string);
print_r($array_de_string);
echo "<br>";

//implode faz o inverso do explode
$array3 = ["Rafael","De Luca","Lerias"];
$string2 = implode(' ',$array3);
echo "<br>O nome completo é " . $string2;

//ordenar com sort
sort($arr);
echo "<br>";
print_r($arr);
//ordenar reverso
rsort($arr);
echo "<br>";
print_r($arr);
//asort mantém as associações (index)
asort($arr);
echo "<br>";
print_r($arr);

?>