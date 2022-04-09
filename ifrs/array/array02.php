<?php

$arr = array(5,7,15,13);
$arr [] = 25;
print_r($arr);
$arr [2] = "Java";
$arr [15] = "3.14";
$arr []= "Final";
echo "<br>";
print_r($arr);
echo "<br>Numero de elementos do array: " . count($arr);

echo "<br>Imprimindo SEM todos os termos.<br>";
for ($i = 0; $i < count($arr); $i++) {
	echo $arr[$i] . "<br>";	
}

echo "<br>Imprimindo COM todos os termos e indice.<br>";
foreach ($arr as $valor) {
	echo $valor . ' | ';	
}

echo "<br><br>";

foreach ($arr as $chave=>$valor) {
	echo $chave . "[" . $valor . '] ';	
}

echo "<br><br>Array em php é considerado um mapa ou array associativo.";
echo "<br>Array pode ter uma string, boolean como indice.<br>";
echo "<br>Não é necessário inicializar um array.<br>";

$arr["data"] = 17;
$arr[true] = "Rafael";
$arr[false] = 3.14;
$arr["idade"] = 35;
$arr["cidade"] = "Porto Alegre";
foreach ($arr as $chave=>$valor) {
	echo $chave . "[" . $valor . '] ';	
}

echo "<br><br>";
print_r($arr);

?>