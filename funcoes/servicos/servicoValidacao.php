<?php
function validaNome(string $nome) : bool {

    if(empty($nome)) {
        setarMensagemErro('O nome não pode ser vazio, favor informar um nome entre 3 e 40 caracteres');
        return false;
    }
    
    else if(strlen($nome) <3) {
        setarMensagemErro('O nome deve ter ao menos 3 caracteres');
        return false;    
    }
    
    else if(strlen($nome) >50) {
        setarMensagemErro('O nome deve ter no máximo 50 caracteres');
        return false;    
    }
    
   
    
    else if($idade<6 || $idade>65  ) {
        setarMensagemErro('Só existem categorias para competidores entre 6 e 65 anos');
        return false;    
    }

    return true;

}

function validaIdade(string $idade) : bool {

    if(!is_numeric($idade)) {
        setarMensagemErro('Informe um número inteiro positivo para idade');
        return false;    
    }
    return true;
}
    

?>
