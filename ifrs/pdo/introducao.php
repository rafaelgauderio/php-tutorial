<?php


$database = new PDO('mysql:host=localhost;dbname=pessoa','root','');
$command = $database->prepare('SELECT * FROM pessoa');
$command->execute([]);


echo "<br>Consulta Geral";
//único comando sql que tem FETCH_ASSOC é o select
echo '<pre>';
while($linha = $command->fetch(PDO::FETCH_ASSOC)) {
	print_r($linha);
}
echo '</pre>';



echo "<br>Consulta específica";

$command = $database->prepare('SELECT * FROM pessoa WHERE nome like "%silva%"');
$command->execute([]);
echo '<pre>';
while($linha = $command->fetch(PDO::FETCH_ASSOC)) {
	print_r($linha);
}
echo '</pre>';


echo "<br>PlaceHolder";
$command = $database->prepare("SELECT * FROM pessoa WHERE nome like ?");
$command->execute(['%ju%']);
//$command->execute($_POST['nome']);
echo '<pre>';
while($linha = $command->fetch(PDO::FETCH_ASSOC)) {
	print_r($linha);
}
echo '</pre>';

echo "<br>PlaceHolder com 2 argumentos";
$command = $database->prepare("SELECT * FROM pessoa WHERE nome = ? OR idade = ? ");
$command->execute(['claudia',16]);
//$command->execute($_POST['nome']);
echo '<pre>';
while($linha = $command->fetch(PDO::FETCH_ASSOC)) {
	print_r($linha);
}
echo '</pre>';


echo "<br>PlaceHolder como alias ";
$command = $database->prepare("SELECT * FROM pessoa WHERE nome = :nome OR idade = :idade");
$command->execute(['nome'=>'Rafael de Luca','idade'=>19]);
//$command->execute($_POST['nome']);
echo '<pre>';
while($linha = $command->fetch(PDO::FETCH_ASSOC)) {
	print_r($linha);
}
echo '</pre>';
