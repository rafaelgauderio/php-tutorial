<?php

/*
PHP Data Objects:
    Utiliza os drivers de um banco de dados específico para de fato realizar operações.
    É uma camada de abstração para acesso e manipulação de bancos de dados.
    Seu uso é independente de um banco de dados específico.
    É uma alternativa orientada a objetos para se trabalhar com acesso a dados em PHP.
*/

require 'Produto.php';

$produto = new Produto();
//$produto->list();

switch ($_GET['operation']) {
    case 'list':

        echo '<h3> Produtos: </h3>';        
        foreach($produto->list() as $valeu) {
        echo 'Id: ' . $valeu['id'] . '<br> Descrição: ' . $valeu['descricao'] . '<hr>';
    }
        break;

    case 'insert':

        $status = $produto->insert('Produto caderno INSERIDO na loja virtual');

        if (!$status) {
            echo "Não foi possível executar a operação.";
            return false;
        }
        echo " Registro inserido com sucesso!";
        break;


    case 'update';

    $status = $produto->update('Produto caderno ALTERADO na loja virtual',2);

    if (!$status) {
        echo "Não foi possível executar a operação.";
        return false;
    }
    echo " Registro atualizado com sucesso!";
        break;

    case 'delete';

    $status = $produto->delete(10);

    if (!$status) {
        echo "Não foi possível executar a operação.";
        return false;
    }
    echo " Registro removido com sucesso!";
        break;
}

