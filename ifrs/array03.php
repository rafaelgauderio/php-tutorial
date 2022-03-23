<?php

$arr = [5,7,15,13];


$arr["cidade"] = "Porto Alegre";
print_r($arr);

echo "<br>Removendo um elemento<br>";
unset($arr[0]);
unset($arr["cidade"]);
print_r($arr);

echo "<br><br>Instanciando já com as posições.<br>";
$array2 = ['nome' =>  "Rafael De Luca", "cidade" => "Curitiba"];
print_r($array2);

?>