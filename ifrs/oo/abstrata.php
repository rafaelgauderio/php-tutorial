<?php
//classe abstrata com podem ser instantiaca
// Se a classe tiver um método abstrato a classe já não pode ser instanciada
// interface seria uma classe abstrata onde todos os métodos são abstratos (sem implementação na interface)
//implementacao apenas na classe que implements a interface
abstract class pai {

    protected $x = (7+3); // protected se propaga para a classe herdada
    private $y=17; //só acessível na classe
    public $z=15; // acessil de qualquer classe

    function __construct() {        
        echo "<br>Construtor ". get_class($this) . "  ,valor de x: " . $this->x;
    }

    function __destruct() {
        echo "<br>classe <b>" . get_class($this) . "</b> destruida";
    }


    abstract function testarFuncAbstrata();
    abstract function imprimeOi ();
}

class filho extends pai {

 function testarFuncAbstrata() {
    $local = 15;
    echo "<br>Imprime conteúdo da função abstrata, valor de x: " . $local; 
}

function imprimeOi() {
    echo "<br>Oi!";
}

}

// Colando que vai receber como parâmetro um objeto do tipo da classe pai
// filho também é um pai. Então não precisa restringir apenas com objeto do tipo filho.
// deixa objeto do tipo pai que pode receber qualquer classe que extends a pai
function usaObjeto(pai $objeto) {
    $objeto->imprimeOi();
}

//não tem como instanciar uma classe abstrata 
// $objetoA = new pai();
$objetoB = new filho;
$objetoB->testarFuncAbstrata();

usaObjeto($objetoB);





?>

