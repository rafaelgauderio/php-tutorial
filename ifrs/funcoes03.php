<?php

$arr = [1,4,8,13,15,19,25,50];

function funcaoAlgebrica($x) {

	return pow($x,2) + 4*$x - 2;

}

//array_map(callback, arr1)
$arr2 = array_map("funcaoAlgebrica", $arr);

print_r($arr2);

?>