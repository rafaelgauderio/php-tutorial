<?php
function sum(...$numbers) {
    $acumulator = 0;
    foreach ($numbers as $values) {
        $acumulator += $values;
    }
    return $acumulator;
}

echo "Soma dos argumentos informados: " .sum(1, 2, 3, 4,5,6,7);

?>