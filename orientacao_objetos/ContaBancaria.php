<?php


class Contabancaria
{
    public $banco;
    public $nomeTitular;
    public $numeroAgencia;
    public $numeroConta;
    public $digitoConta;
    public $saldo;

    public function _construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $digitoConta, $saldo) {
        $this->banco = $banco;
        $this->nomeTitutar = $nomeTitular;
        $this->numeroAgencia =$numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->digitoConta = $digitoConta;
        $this->saldo = $saldo;
      }


    public function getBanco() {
        return $this->banco;
    }

    public function setBanco($banco) {
        $this->banco=$banco;
    }

    public function getNomeTitular() {
        return $this->nomeTitular;
    }

    public function setNomeTitular($nome) {
        $this->nomeTitular=$nome;
    }

    public function getNumeroAgencia() {
        return $this->numeroAgencia;
    }

    public function setNumeroAgencia($agencia) {
        $this->numeroAgencia=$agencia;
    }

    public function getNumeroConta() {
        return $this->numeroConta;
    }

    public function setNumeroConta($conta) {
        $this->numeroConta=$conta;
    }

    public function getDigitoConta() {
        return $this->digitoConta;
    }

    public function setDigitoConta($digito) {
        $this->digitoConta=$digito;
    }
   
    public function obterSaldo() {
            return 'Seu saldo atual é R$ ' .$this->saldo . PHP_EOL;        
    }

    public function depositar($valor) { 
        $this->saldo +=$valor;
        return 'Depósito de R$ ' .$valor . ' realizado com sucesso! ' .PHP_EOL;
    }

    public function sacar($valor) {
        $this->saldo -=$valor;
        return 'Saque de R$ ' . $valor . ' realizado com sucesso!' .PHP_EOL;
    }
           
}


$conta = new ContaBancaria();

$conta->setBanco('Banco Itau');
$conta->setNomeTitular('Rafael De Luca');
$conta->setNumeroConta('46578');
$conta->setNumeroAgencia('0329');
$conta->setDigitoConta('2');

$conta->depositar(400.00);
echo $conta->obterSaldo();

echo PHP_EOL;
echo $conta->depositar(800.50);
echo $conta->obterSaldo();

echo PHP_EOL;
echo $conta->depositar(300.75);
echo $conta->obterSaldo();

echo PHP_EOL;
echo $conta->sacar(200.15);
echo $conta->obterSaldo();

//IMPRIMINDO VARIÁVEL CONTA
echo PHP_EOL;
var_dump($conta);





