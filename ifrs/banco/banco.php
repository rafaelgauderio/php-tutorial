<style>

table {
    border:2px solid green;
    border-width: thick;

}

td {
    padding: 5px;
    border: 2px solid black;
    text-align: left;

} 

th{
	text-align: center;
	border: 3px solid red;
}

</style>




<?php

$conexao = mysqli_connect('localhost','root','','testephp');

print_r($conexao);

if(!$conexao) {
	die(mysqli_error($conexao));
}	

echo "<br><br>";


$sql_produtos = ('SELECT * FROM produto');
//$result=mysqli_query($conexao,'SELECT * FROM produto');
$result=mysqli_query($conexao,$sql_produtos);
print_r($result);

echo "<br><br>";

//pega apenas uma linha do ponteiro e vai guardando na variavel até o ponteiro apontar para null

while($linha=mysqli_fetch_assoc($result)) {

	echo "<b>Produto:</b> " . $linha['nome'] . "<b> Descrição:</b> " . $linha['descricao'] . "<b> Quantidade:</b> " . $linha['qtd'] . "<br>";
}

echo "<br><br>";

$result=mysqli_query($conexao,$sql_produtos);
while($linha=mysqli_fetch_assoc($result)) {
	
	print_r($linha);
}



$resultado=mysqli_query($conexao,$sql_produtos);
echo "<br><br>tetch_associ (associada uma chave a um valor)<br>";
echo "<table >\n";
echo "<tr><th>Produto</th><th>Descrição</th><th>Quantidade</th></tr>\n";

while($linha=mysqli_fetch_assoc($resultado)) {

	echo "<tr><td>" . $linha['nome'] . "</td><td>" . $linha['descricao'] . "</td><td>" . $linha['qtd'] . "</td></tr>\n";
}

echo "</table>\n";


//definicoes de fetch
echo "<br>fetch_array (traz info duplicada com número e nome)<br>";
$result2=mysqli_query($conexao,$sql_produtos);
while($linha=mysqli_fetch_array($result2)) {
	
	print_r($linha);
}


echo "<br><br>fetch_row (traz info apenas pelo número do campo)<br>";
$result2=mysqli_query($conexao,$sql_produtos);
while($linha=mysqli_fetch_row($result2)) {
	
	print_r($linha);
}

echo "<br><br>fetch_field (tras as informações sobre o campo e não o conteúdo)<br>";
$result3=mysqli_query($conexao,$sql_produtos);
while($linha=mysqli_fetch_field($result3)) {
	
	print_r($linha);
}



?>