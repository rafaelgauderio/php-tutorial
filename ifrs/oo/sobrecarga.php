<?php

//sobrecarga: um mode de definir um compartamento para classe para quando tentar acesar um propriedade
// da classe que não existe, ao invés de dar erro, gerar uma outra resposta
// Usado para tratar de forma dinâmica propriedades que não exisem no objeto
// __get() vai ser disparado quanto tentar acessar o valor de uma propriedade que não existe
class Teste {

    private $arr = ['nome'=>'Rafael', 'idade'=>35, 'endereço'=> 'Rua Brasil, 35, Centro'];

    function __get($nomeDaVariavel) {
        if(array_key_exists($nomeDaVariavel,$this->arr)) {
            return $this->arr[$nomeDaVariavel];
        } else {
            return NULL;
        }
        
    }
    function __set($nomeDaVariavel, $valor) {
        $this->arr[$nomeDaVariavel]=$valor;
    }

}

$objeto = new Teste();

echo $objeto->nome;
echo "<br>";
echo $objeto->idade=90;
echo "<br>";
//se tentar alterar o valor de uma propriedade que não existe, o php criar a propriedade e seta o valor.
echo $objeto->sexo='masculino';
echo "<br>";
print_r($objeto);


?>

