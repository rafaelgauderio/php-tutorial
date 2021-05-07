<?php
    session_start();
?>

<?DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Formulário de inscrição de natação </title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device, inicital-scale=1">
</head>
<body>

<p> FORMULÁRIO PARA INSCRIÇÃO DE COMPETIÇÃO DE NATAÇÃO </p>
<form action="script_validando_dados_session.php" method="post">
    <?php
        $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso' : ''];
        if(!empty($mensagemDeSucesso)){
            echo $mensagemDeSucesso;
        }
        $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro' : ''];
        if(!empty($mensagemDeErro)){
            echo $mensagemDeErro;
        }
     ?>
        <p> Nome: <input type="text" name="nome" /> </p>
        <p> idade: <input type="text" name="idade" /> </p>
        <p><input type="submit" value="Enviar dados do nadador" /> </p>
</form>
</body>
</html>

        
