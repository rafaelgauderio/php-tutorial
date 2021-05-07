<?php

session_start();

$categorias = [];
$categorias = 'infantil';
$categorias = 'adolescente';
$categorias = 'adulto';


$nome = $_POST['nome'];
$idade = $_POST['idae'];

if(empty($nome)) {
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, favor informar um nome entre 3 e 40 caracteres';
    header('location: validando_dados_session.php');
    return;
}

else if(strlen($nome) <3) {
    $_SESSION['messagem-de-erro'] = 'O nome deve ter ao menos 3 caracteres';
    header('location: validando_dados_session.php');
    return;

}

else if(strlen($nome) >50) {
    $_SESSION['messagem-de-erro'] = 'O nome deve ter no máximo 50 caracteres';
    header('location: validando_dados_session.php');
    return;

}

else if(!is_numeric($idade)) {
    $_SESSION['messagem-de-erro'] = 'Informe um número inteiro positivo para idade';
    header('location: validando_dados_session.php');
    return;

}

else if($idade<6 || $idade>65) {
    $_SESSION['messagem-de-erro'] = 'Só existem categorias para competidores entre 6 e 65 anos';
    header('location: validando_dados_session.php');
    return;

}


if ($idade >=6 && $idade <=12 ) {
    for($i = 0; $i <=count($categorias); i++) {
        if ($categorias[$i]='infantil') {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria " .strtoupper($categorias[$i]);
            hearer('location: validando_dados_session.php');
        }
    }
}

else if ($idade >=13 && $idade <=17 ) {
    for($i = 0; $i <=count($categorias); i++) {
        if ($categorias[$i]='adolescente') {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria " .strtoupper($categorias[$i]);
            hearer('location: validando_dados_session.php');
        }
    }
}

else  {
    for($i = 0; $i <=count($categorias); i++) {
        if ($categorias[$i]='adulto') {
            $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria " .strtoupper($categorias[$i]);
            hearer('location: validando_dados_session.php');
        }
    }
}






