<?php 

declare(strict_types=1);

$pdo = null;

try {
    //     new PDO('driver_name:host=localhost;dbname=example', 'user', 'pass');
    $pdo = new PDO('mysql:host=mysql;dbname=exemplo_php', 'root', '123456');

} catch (Exception $error) {
    echo $error->getMessage();
    die();    
}

return $pdo;