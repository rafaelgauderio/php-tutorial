<?php


//estrutura while
echo "<br>ESTRUTURA WHILE<br>";
$x=15;
while ($x > 0 ) {

	echo "$x <br>";
	$x--;

}

// Estrutura do, estra pelo menos 1 vez no lação
// mesma que a condição while nunca seja satisfeita

echo "<br>ESTRUTURA DO<br>";
$y=5;
do {
	echo $y + $x;
	echo "<br>";
	$y--;
} while ($y >= 0);

echo "<br>ESTRUTURA FOR<br>";
for ($i=0; $i < 20; $i++) {

	echo $i . "<br>";
}

echo "<br>ESTRUTURA FOR<br>";
for ($i=0; $i < 5; $i++) {

	
	if($i %2 == 0 ) {
		echo "$i . é PAR<br>";
	} else if ($i % 2 != 0) {
		echo "$i . é IMPAR<br>";
		
		}
	}

echo "<br>ESTRUTURA FOR com break <br>";
for ($i=0; $i < 15; $i++) {

	
	if($i > 0 and $i %2 == 0 and $i %3==0 ) {
		echo "$i é divisível por 2 e 3!";
		break;
	} else {
		echo "$i <br>";
	}
	
}

echo "<br><br>ESTRUTURA FOR com continue <br>";
for ($i=0; $i < 10; $i++) {

	
	if($i > 0 and $i %2 == 0 and $i %3==0 ) {
		echo "$i é divisível por 2 e 3!<br>";
		continue;
	} else {
		echo "$i <br>";
	}
	
}