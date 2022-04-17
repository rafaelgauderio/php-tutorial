<?php

require_once('funcionario.php');

//1) Crie um arquivo PHP contendo uma classe "Pessoa", que deve guardar dados pessoais como
// nome, data de nascimento, endereço completo e telefones.
// Ela deverá ter um método "idade" que retorna a idade da pessoa calculada a partir da data de nascimento.

class Pessoa {

    protected $nome;
    protected $datanascimento;
    protected $endereco;
    protected $telefone;
    protected $celular;

    function __construct($nome,$datanascimento,$endereco,$telefone,$celular) {
        $this->nome=$nome;      
        $this->datanascimento=$datanascimento;
        $this->endereco=$endereco;
        $this->telefone=$telefone;
        $this->celular=$celular;
    }

    function __destruct() {
        echo "<br><br>A classe <b>" . get_class($this) . "</b> foi destruída.";
    }

    public function __get($atributo) {        
        switch (strtolower($atributo)){
            case 'nome':
            return $this->nome;            
            case 'endereco':
            return $this->endereco;
            case 'telefone':
            return $this->telefone;
            case 'celular':
            return $this->celular;
            case 'datanascimento':
            return $this->datanascimento;            
        }
    }

    public function __set($atributo, $valor) {       
        switch (strtolower($atributo)){                
            case 'nome':
            $this->nome = $valor;
            case 'datanascimento':
            $this->datanascimento=$valor;              
            case 'endereco':
            $this->endereco=$valor;;
            case 'telefone':
            $this->telefone=$valor;
            case 'celular':
            $this->celular=$valor;                    
        }
    }
    
    /*
    public function getNome(){
        return $this->nome;
    }
    public function setNome($valor){
        $this->nome = $valor;
    }
    */


    public function getIdade($date) { 

        return intval(substr(date('Ymd') - date('Ymd', strtotime($date)), 0, -4));
    }

}




?>

