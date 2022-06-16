<?php

echo "<br>Atomicidade: ou executa toda as transações, ou nenhuma";
echo "<b><br>A.C.I.D.<br></b>";
echo "Atomicity = indivisible (tudo ou nada)<br>Consistency = estado inicial e final consistente<br>Isolation = transações em paralelas são isoladas<br>Durability = uma vez consolidadas as transações permancem no bando até novas alterações.<br>";


$database = new PDO('mysql:host=localhost;dbname=pessoa','root','');


try {
  //transformar um erro do banco em um erro do php
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$database->beginTransaction();
$command = $database->prepare("INSERT INTO usuario (nome,idade) VALUES ('De Penha',35)");
$command->execute([]);
$command = $database->prepare("INSERT INTO usuario (nome,idade) VALUES ('Larissa',79)");
$command->execute([]); 
$database->commit();  
} catch (Exception $erro) {
    echo $erro->getMessage() . "<br>";
    print_r($erro->getTrace());
    $database->rollback();
}

?>

