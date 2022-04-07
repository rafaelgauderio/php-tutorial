
<h2>Site com contador de visitas baseado em cookies.</h2>
<?php

if(@$_COOKIE['visitado']) {  
  setcookie('visitado',@$_COOKIE['visitado']+1);   
  echo "Número de visitas: " . @$_COOKIE['visitado'] . "<br>";
} else {   
  setcookie('visitado',1);
  echo "Bem vindo a sua primeira visita a página!<br><br>";
  echo "Número de visitas: " . @$_COOKIE['visitado'] . "<br>";
}

?>

<a href="zerar_cookies.php">Zerar Contador</a>