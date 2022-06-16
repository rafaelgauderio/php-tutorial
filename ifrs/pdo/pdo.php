<?php

$database = new PDO('mysql:host=localhost;dbname=pessoa', 'root', '');
$command = $database->prepare("SELECT * FROM usuario WHERE nome = :nome AND idade = :idade");
$command->execute(['nome'=>'Fulano', 'idade'=>'25']); 

//var_dump($database);

while($line = $command->fetch(PDO::FETCH_ASSOC)) {
    print_r($line);
}




?>

