<?php

//forma primitiva de se trabalhar com data
echo date('d/m/Y') . PHP_EOL;

$data = new Datetime();
var_dump($data);

//formatando data, ano com 2 digitos
echo $data->format('d-m-y') . PHP_EOL;

//formatando data, ano com 4 digitos
echo $data->format('d-m-Y') . PHP_EOL;

//formatando hora
echo $data->format('d-m-Y H:i:s') . PHP_EOL;

/* classe DateInterval é possivel obter intervalos de tempo
-> P período: vem antes de day, month, year, week
Y, M, D, W

-> T tempo: vem antes de hour, minute, second
H, M, S
*/

$intervalo = new DataInterval('PT5M'); // adiciona o período de 5 minutos
$data-> add($intervalo); // soma o intervalo
var_dump($data);

$intervalo2 = new DataInterval('P5Y10M8DT10H55M40S'); 
$data->sub($intervalo); // subtrai o intervalo
var_dump($data);

?>