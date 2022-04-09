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
	<h1>Inserção de dados no banco mysql</h1>
	<form  enctype="multipart/form-data" method="post" action="insertbanco.php">
		<fieldset>
			<legend>Dados do formulário</legend>
			<label>Nome:<input name="nome" placeholder="nome" required></label><br>
			<label>Descrição:<input name="descricao" placeholder="descricao" required></label><br>
			<label>Quantidade:<input type="number" name="quantidade" placeholder="quantidade" required></label>						
		</fieldset>
		<br><br>
		<input type="submit" value="Inserir no banco de dados">

	</form>
</body>
</html>

