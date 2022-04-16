<?php

class Pai {

    protected $x = (7+3); // protected se propaga para a classe herdada
    private $y=17; //só acessível na classe
    public $z=15; // acessil de qualquer classe

    function __construct() {        
        echo "<br>Construtor ". get_class($this) . "  ,valor de x: " . $this->x;
    }

    function __destruct() {
        echo "<br>classe <b>" . get_class($this) . "</b> destruida";
    }

    protected function mostraX() {
        echo "<br>Pai, mostraX: " . $this->x;
    }

    public function mostraValordeX() {
        $this->mostraX();
    }
}

class Filho extends Pai {

    public function mostra() {
        echo "<br>Filho, mostra: " . $this->x;
        $this->mostraX();
    }
}

$objetoA = new Pai();
$objetoB = new Filho;

//Não dá pra acessar o método protected mostraX() de fora, só dentro da classe herdada filho ou dentro da classe pai
//$objetoB->mostraX();
$objetoA->mostraValordeX();
$objetoB->mostra();

//Só acessa variáel publica direto, private e protected com public
echo "<br>variável public acessando direto: " . $objetoA->z;
//echo "<br>variável protected acessando direto: " . $objetoA->x;
//echo "<br>variável private acessando direto: " . $objetoA->y;



?>

