<?php

if (!$_FILES['arquivo']['error']) {

 if ($_FILES['arquivo']['size'] > 30000) {
  header('Location: uploadfiles.html');
  //die('Arquivo tem que ser menor que 30 KB');
}
if(substr($_FILES['arquivo']['type'],0,6) != 'image/') {
  header('Location: uploadfiles.html');
  //die('O arquivo deve ser uma imagem<br>');
}

$caminho='';

if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$caminho.$_FILES['arquivo']['name'])) {
  //echo "Arquivo foi movido com sucesso!<br><br>";

  if(substr($_FILES['arquivo']['type'],0,6) == 'image/') {
    $nome=filter_var($_REQUEST['nome'],FILTER_SANITIZE_STRING);
    echo "Nome: " . $nome . "<br>";
    echo "Segue abaixo a foto enviada: <br>" . '<img src=" ' . $caminho.$_FILES['arquivo']['name'] . '">';
  } else {
    header('Location: uploadfiles.html');      
    //echo "O arquivo não é uma imagem<br>";
  }
}
else {
  die("<br>Erro ao mover arquivo para " . $caminho . '.');
}

} else {
  die($_FILES['arquivo']['error']);
}


?>
