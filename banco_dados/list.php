<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'SELECT * FROM produtos';

echo '<h2> Produtos: </h2>';

foreach ($pdo->query($sql) as $key => $value) {
    echo 'Id: ' . $valeu['id'] .'<br> Descrição: ' . $valeu['descricao'] .'<hr>';
}
