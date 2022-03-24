<?php
$numeros = trim(fgets(STDIN));

//$numeros = "5,1,4,9,8,15,11";

$numeros2 = explode(',',$numeros);

$media = array_sum($numeros2)/count($numeros2);

sort($numeros2);

$maximo = max($numeros2);
$minimo = $numeros2[0];


function calcMediana (array $arr) {
    
    $tamanho = count($arr);
    
    if(empty($arr)) {
        $mediana=0;        
    }
    if ($tamanho % 2 != 0) {
        $mediana = $arr[(($tamanho+1)/2) -1];
    } else {
        $valor_anterior = $arr[($tamanho/2) -1];
        $valor_posterior = $arr[$tamanho/2];
        $mediana = ($valor_anterior + $valor_posterior) /2;
    }
    return $mediana;
    
}

$mediana = calcMediana($numeros2);

/*
echo $minimo . "<br>";
echo $maximo . "<br>";
echo $mediana . "<br>";
echo $media . "<br>";

*/

echo $minimo . " " . $maximo . " " . $media . " " . $mediana;

?>