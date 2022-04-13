<h2>Orientação a objetos com PHP</h2>
<?php

//criar classe e instanciar objetos
class A {

  public $x;
  private $y;

//disparado quando instancia um objeto da classe
  function __construct() {
    echo "Criou objeto.<br>";
  }


//disparado quando destroi o objeto
//ao terminar a execucação do php todos os objetos são destruidos.
  function __destruct() {
    echo "<br>Destruiu objeto.<br>";
  }

  function imprimeX() {
    echo "$this->x";
  }

//como y é private preciso de uma método, não tem como acessar ela direto
   function imprimeY() {
    $valor="Claudinha";
    echo "$this->y$valor";
  }

}

class B {
  private $y;
  const z = 123;
  const phi = 3.1415;

  function __construct($valor){
    $this->y=$valor;

  }

    function __destruct() {
    echo "<br>Destruiu objeto2.";
  }

   function imprimeY() {
 
    echo "$this->y";
  }



}



//instanciando
$objeto = new A();
print_r($objeto);
$objeto->x = "<br>valor de x = Rafael De Luca<br>";
//$objeto->y = "<br>Valor da variável y"; //não tem como acessar um variavel private direto
echo $objeto->x;
$objeto->imprimeY("Juliana da Silva");

echo "<br>";

$objeto2 = new B("Valor de Y");
$objeto2->imprimeY();

echo "<br>";
//acessando uma constante
// operador :: serve para acesar membros estáticos da classe
// membros estásticos = não precisam ser instanciados para chamar. Constantes pertecem a Classe e não ao objeto
// operado :: = Paamayim Nekudotayim
echo $objeto2::z;
echo "<br>";
echo "valor da constante phi: " . $objeto2::phi;
echo "<br>Chamando a constante phi sem instanciar (direto pela classe): " . B::phi;


spl_autoload_register('funcao_autoload');

function funcao_autoload($class_name) {
  require_once '' . $class_name . '.php';
}

$objeto3 = new NovaClasse();
$objeto4 = new Pessoa();


?>
