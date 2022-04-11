<!DOCTYPE html>
<head>
<meta charset="UTF-8">


<style>

	body {
		font-family: "Arial Black", "Arial";
		font-size: 12px;
		
	}

	h1 {
		background-color: #48d1cc;
		border-radius: 10px;
		padding: 5px;
		border:1px solid black;
		background: linear-gradient(to bottom, #48d1cc 0%, #00ced1 100%);
		font-size: 15px;
		

	}

	form {
		margin: 10px;
		padding: 10px;
		border:1px solid black;
		border-radius: 5px;
		background: linear-gradient(to bottom, #eea 0%, #00FFFF 100%);
		 

	}

	input {
		padding: 3px;
	}

	label {
		width:180px;
		display: inline-block;
	}
	
</style>

</head>

<body>
	<h1>Tela de Cadastro</h1>
	<h3><a href="formlogin.php">Já é cadastrado? Clique aqui para fazer login.</a></h3>
	<form  method="post" action="cadastro.php">
		<fieldset>
			<legend>Dados do formulário</legend>
			<label>Login:<input name="login" placeholder="login" required></label><br>
			<label>Senha:<input name="senha" type="password" placeholder="senha" required></label><br>								
		</fieldset>
		<br>
		<input type="submit" value="Login">

	</form>
</body>
</html>

<?php

if(isset($_REQUEST['msg'])) {
	echo $_REQUEST['msg'];
}

?>


