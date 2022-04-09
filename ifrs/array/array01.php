<?php

$arr = array(5,7,15,13);

<?php

$arr = array(5,7,15,13);

$arr2 = [2,13,9,6,12,45];

$arr3 = [2,13,[6,63],6,81];

echo "Não usar echo para imprimir array!<br>";


print_r($arr);
echo "<br>";
print_r($arr2);
echo "<br>";
print_r($arr3);

echo "<br>Array é uma estrutura heterogênea.<br>";
$arr4 = [3,"Rafael", true,2.45];
var_dump($arr4);

echo "<br>Acrescentar no array";
$arr [] = 25;
print_r($arr);
$arr [2] = "Java";
$arr [15] = "3.14";
echo "<br>";
print_r($arr);

?>