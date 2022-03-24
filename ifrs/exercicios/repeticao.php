<?php

//imprimir os 100 primeiros números pares com while e for

$i=0;
while ($i < 101) {
	echo "$i ";
	$i=$i +2;
	
}

echo "<br>";

for ($i=0 ; $i<101; $i=$i+2) {
	echo "$i ";	
}

?>
