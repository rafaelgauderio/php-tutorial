<?php

// PHP - PHP HyperText Preprocessor 
// acrônimo recursivo
// linguagem interpretada (programa não compila, executa o código direto no interpretador)
// php é uma linguagem lenta (baixa performance)
// web -arquitetura client-servidor. PHP roda no SERVIDOR
// Não tem como o cliente ver o código fonte. Roda no servidor que envia apenas o RESULTADO para o client.
// Navegador não save interpretar o php, quem interpreta é o servidor
// Mais seguro se o client não enxerga o código
// Consegue acessar um bando de dados
// Informação no client - processada por o JavaScript
// $ na frent de todas as variáveis
// usa . para concatenar string
// echo nl2br("\n) - para quebrar uma linha
// usar aspas duplas para interpretar o que tem dentro da string
// aspas simples não interpreta a string
// Toda saida do php é interprada como html
// salvar o .php na pasta c:\xampp\htdocs
// https:\\localhost\nome_arquivo.php


$x = 10;
$y = 5;
echo $x + $y + 15 ;

$name = 'Rafael De Luca';
$age = 35;

echo nl2br("\nNome: " . $name . " e idade: " . $age);
echo nl2br("\n");
echo nl2br('\nNome: . $name . aspas simples não interpreta a variavel!');

$result = $x * $y;
echo nl2br("\n\nResultado da multiplicacao: $result");
echo nl2br("\n");
echo 'Resultado da multiplicacao: ' . ($x * $y);


?>
