<?php

//print_r($_FILES);
if (!$_FILES['arquivo']['error']) {

 if ($_FILES['arquivo']['size'] > 1000000) {
  //header('Location': arquivos.html);
  die('Arquivo tem que ser menor que 1000 KB');
}
if(substr($_FILES['arquivo']['type'],0,6) != 'image/') {
  //header('Location': arquivos.html);
  die('O arquivo deve ser uma imagem<br>');
}


echo 'Fazendo upload do arquivo ' . $_FILES['arquivo']['name'] . ' (temporariamente em ' .
$_FILES['arquivo']['tmp_name'] . ') do tipo de arquivo ' . $_FILES['arquivo']['type'] .
' com tamanho de ' . $_FILES['arquivo']['size'] . ' bytes...<br>';

$caminho='uploads/';

if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$caminho.$_FILES['arquivo']['name'])) {
  echo "Arquivo foi movido com sucesso! ";
  if(substr($_FILES['arquivo']['type'],0,6) == 'image/') {
    echo '<img src=" ' . $caminho.$_FILES['arquivo']['name'] . '">';
  } else {      
    echo '<a href="' . $caminho.$_FILES['arquivo']['name'] . '"> Arquivo</a>';
  }
}
else {
  die("<br>Erro ao mover arquivo para " . $caminho . '.');
}

} else {
  die($_FILES['arquivo']['error']);
}


?>