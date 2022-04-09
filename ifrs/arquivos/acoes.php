<?php
	//Se as variáveis foram vazias enviar de volta para o formulário
	//if($_REQUEST['nome'] == '' || $_REQUEST['escolaridade'] == '' || $_REQUEST['turno'] == '' ) {
	if($_REQUEST['nome'] == '') {
		header('Location: formulario.php?msg=FAVOR PREENCHER O NOME!');	

	}

	// sanitização de variáveis
	// Não usar nunca o conteúdo enviado pelo usuário, sempre limpar as variáveis antes
	//colocar @ na frente de filter e some os notice do php
	$nome=filter_var($_REQUEST['nome'],FILTER_SANITIZE_STRING);
	echo $nome . "<br>";

	$escolaridade=@filter_var($_REQUEST['escolaridade'],FILTER_SANITIZE_STRING);
	echo $escolaridade . "<br>";

	if(@$_REQUEST['turno'])
	foreach($_REQUEST['turno'] as $value ) {
		$value =@filter_var($value, FILTER_SANITIZE_STRING);
		echo $value . "<br>";
	}
	$data=@filter_var($_REQUEST['data'], FILTER_SANITIZE_STRING);
	echo $data;
	//echo $_REQUEST['turno']; não tem como imprimir um array com echo
	//print_r($_REQUEST['turno']);
?>