<?php

//include ('funcao.php');
//require('funcao.php');
//vai chamar o arquivo apenas uma vez, mesma que seja chamado mais de uma vez dentro do arquivo
require_once('funcao.php');
require_once('funcao.php');

echo "O quadrado de 9 é: " . quadrado(9) . ".<br><br>";

$txt = file_get_contents('texto.txt');
echo $txt;

echo "<br><br>Imprimendo arquivo como vetor<br>";
$array = file('texto.txt');
print_r($array);


echo "<br><br>Imprimindo com foeach<br>";
foreach($array as $values) {
	echo $values . '<br>';
}

//file_get_contents() faz tudo que as funções abaixo
// fopen(), fread(), fwrite(), fprintf(), fclose()



echo "<br>Arquivo existe? " . file_exists('texto2.txt');
echo "<br>Arquivo existe?" . file_exists('arquivo_inexistente.txt') . "<br>";

echo "<br>Escrita nos arquivos<br>";
$bytes = file_put_contents('texto2.txt',"Sobrescrever os textos no arquivo\n47");
if($bytes>0) {
	echo "Escrito no arquivo com sucesso. Numero de bytes escritos: " . $bytes;
} else {
	echo "Falha ao tentar salvar no arquivo";
}

?>



