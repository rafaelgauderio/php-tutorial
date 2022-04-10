<?php
//$numeros = trim(fgets(STDIN));

$numeros = "5,1,4,27,29,8,15,11,10";

$numeros2 = explode(',',$numeros);

$media = round(array_sum($numeros2)/count($numeros2),1);

sort($numeros2);
$index_maior = count($numeros2)-1;
$maximo = $numeros2[$index_maior];
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

$mediana = round(calcMediana($numeros2),1);

/*
echo $minimo . "<br>";
echo $maximo . "<br>";
echo $mediana . "<br>";
echo $media . "<br>";

*/

echo $minimo . " " . $maximo . " " . $media . " " . $mediana;

?>