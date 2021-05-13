<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'INSERT INTO produtos(descricao) VALUES(?)';
// prepare = espera uma string com a instrução SQL que desejada.
$prepare = $pdp->prepare($sql);
// bindParam = Vincula um parâmetro ao nome da variável especificada.
$prepare->bindParam(1, $_GET['descricao']);
$prepare->execute();

echo $prepare->rowCount();
