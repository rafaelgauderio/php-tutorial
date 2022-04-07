<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Página de contador de visitas</title>
</head>

<body>

	<h2>Contador de visitas</h2>
	<h4>Clique no contador para zerar as visitas e F5 para incrementar.</h4>

	<?php
	if (!file_exists('visitantes.txt')) {
		$contador=0;
		$arquivo=fopen("visitantes.txt","wb");
		fwrite($arquivo,$contador);
		fclose($arquivo);	
	} else {

	$arquivo=fopen("visitantes.txt","r");
	$contador=fread($arquivo,50); //arquivo com 50 bytes de tamanho
	$contador++;
	$arquivo=fopen("visitantes.txt","w");
	fwrite($arquivo,$contador);
	fclose($arquivo);

}

?>

<br><a href="zerar.php"><?="Número todal de visitas: ". $contador ?></a>

</body>
</html>