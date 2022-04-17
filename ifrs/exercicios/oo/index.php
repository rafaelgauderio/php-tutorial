<?php

require_once('pessoa.php');
require_once('funcionario.php');


$func = new Funcionario();

$func->nome= 'Rafael de Luca da Silva';
$func->datanascimento='17-12-1990';
$func->endereco="Rua Brasil, 35. bairro: centro, CEP: 90245-000, cidade: Canoas";
$func->telefone="51-33694545";
$func->celular="51-99245569774";
$func->cargo='Deselvonvedor PHP';
$func->salario=4500.80;
$func->dataadmissao='30-10-2018';


echo "Nome: " . $func->nome . "<br>";
echo "Data de Nascimento: " . $func->datanascimento . "<br>";
echo "Endereço: " . $func->endereco . "<br>";
echo "Telefone fixo: " . $func->telefone . "<br>";
echo "Celular: " . $func->celular . "<br>";
echo "Cargo: " . $func->cargo . "<br>";
echo "Salário: R$ " . $func->salario . "<br>";
echo "Data de admissão: " . $func->dataadmissao . "<br>";
echo "Imposto (27,5% do salário): R$ " . $func->imposto($func->salario) . "<br>";
echo "Idade " . $func->getIdade($func->datanascimento) . " anos.<br>";
echo "Tempo de empresa: " . $func->tempo($func->dataadmissao);






?>

