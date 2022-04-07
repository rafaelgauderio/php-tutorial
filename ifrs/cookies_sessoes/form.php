<form method="POST" action="login.php">
	
	Login: <input name="login" placeholder="login"><br>
	Senha: <input type="password" name="senha" placeholder="senha"><br>
	<input type="submit">
</form>	

<?php
$msg = filter_var(@$_REQUEST['msg'], FILTER_SANITIZE_STRING);
echo $msg;

?>