<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>

<form method="post" action="acoes.php">

<label>Nome: <input name="nome"><br></label>

    <label>Escolaridade: <br>
        <input type="radio" name="escolaridade" value="FC"> Fundamental Completo<br>
        <input type="radio" name="escolaridade" value="MC"> Ensino Médio Completo<br>
        <input type="radio" name="escolaridade" value="SC"> Superior Completo<br>
    </label>

<label>Turno: <br>
    <input type="checkbox" name="turno[]" value="M"> Manhã <br>
    <input type="checkbox" name="turno[]" value="T"> Tarde <br>
    <input type="checkbox" name="turno[]" value="N"> Noite <br>
</label>

<label>
    <input type="date" name="data" required><br><br>
</label>

    <input type="submit">

</form>

<?php
    //satizar todas as variáveis para proteção
    $msg = filter_var(@$_REQUEST['msg'], FILTER_SANITIZE_STRING);
    echo "<br>". @$_REQUEST['msg'];
?>


