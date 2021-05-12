<?php 

declare(strict_types=1);

$pdo = null;

try {
    $pdo = new PDO('mysql:host=mysql;dbname=exemplo_php', 'root', '123456');

} catch (Exception $error) {
    echo $error->getMessage();
    die();    
}

return $pdo;