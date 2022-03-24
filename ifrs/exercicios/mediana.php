<?php
//$numeros = trim(fgets(STDIN));

$numeros = "1,2,4,5,3,12";

$numeros2 = explode(',',$numeros);

$media = array_sum($numeros2)/count($numeros2);

sort($numeros2);

//print_r($numeros2);

function calcMediana (array $arr) {
	$tamanho = count($arr);
    
    if(empty($arr)) {
		$mediana=0;        
    }
    if ($tamanho % 2 != 0) {
        $mediana = $arr[(($tamanho +1)/2) -1];
    } else {
		$valor_anterior = $arr[($tamanho /2) -1];
		$valor_posterior = $arr[$tamanho/2];
        $mediana = ($valor_anterior + $valor_posterior) /2;
    }
    return $mediana;
    
}

$mediana = calcMediana($numeros2);

echo min($numeros2) . " " . max($numeros2) . " " . $media . " " . $mediana;

?>