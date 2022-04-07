<?php
// Seção a info não fica gravada no navegador.
// Fica gravada no servidor
// Fechar o navegador encerra a sessão
session_start();

$_SESSION['login'] = 'Rafael De Luca' . "!";


echo "Ola, seja bem-vindo " . $_SESSION['login'];

//deletar a sessão é como deletar um elemento do array
unset($_SESSION['login']);
//Agora nãov ai ter o nome
echo "<br>Ola, seja bem-vindo " . @$_SESSION['login'];

//apagar todas as variáveis de sessão de uma só vez
//é util no logoof de um usuário
session_destroy();



?>