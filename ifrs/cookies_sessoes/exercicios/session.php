<h2>Site com contador de visitas baseado em sessões.</h2>

<?php

session_start();

if(@$_SESSION['visitado']) {

	$_SESSION['visitado']++;
	echo "Numeros de visitantes: " . $_SESSION['visitado'] . "<br><br>";

} else {
	echo "Seja bem-vindo!<br><br>";
	@$_SESSION['visitado']=1;
	echo "Numeros de visitantes: " . $_SESSION['visitado'] . "<br><br>";
}

?>

<a href="zerar_session.php">Zerar Contador</a>