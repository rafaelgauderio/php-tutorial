<?php

$a=1;
$b=-4;
$c=-0;

$delta = pow($b,2) - ((4*$a)*$c);

if ($a==0) {
    $x3 = -($c)/$b;
	echo $x3;
} else {
    $x1 = (-$b + sqrt($delta))/(2*$a);
   	$x2 = (-$b - sqrt($delta))/(2*$a);
    echo "$x1<br>$x2 ";
	
}