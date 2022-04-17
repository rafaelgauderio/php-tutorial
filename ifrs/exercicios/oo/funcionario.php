<?php

require_once('pessoa.php');

//Crie um arquivo PHP contendo uma classe "Funcionario" que deve herdar de "Pessoa" 
//e acrescentar um campo para cargo, um para salário e um para data de admissão. 
//Ela deverá ter um método "tempo" que retorna o tempo de serviço do funcionário a partir da data de admissão,
// e um método "imposto" que retorna 27,5% do salário do funcionário.

class Funcionario extends Pessoa {

    private $cargo;
    private $salario;
    private $dataadmissao;

    function __construct() {
        parent::__construct($this->nome,$this->datanascimento,$this->endereco,$this->telefone,$this->celular);
    }

    function __destruct() {        
        echo "<br><br>A classe <b>" . get_class($this) . "</b> foi destruída.";    
    }

    public function __get($atributo) { 
        //parent::__get($atributo);       
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
            case 'cargo':
            return $this->cargo;            
            case 'salario':
            return $this->salario;
            case 'dataadmissao':
            return $this->dataadmissao;                    
        }
    }

    public function __set($atributo, $valor) {
        //parent::__set($atributo,$valor);
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
            case 'cargo':
            $this->cargo = $valor;
            case 'salario':
            $this->salario=$valor;              
            case 'dataadmissao':
            $this->dataadmissao=$valor;                           
        }
    }

    public function imposto($salario) {
        return $salario * 0.275;
    }

    public function tempo($dataadmissao) { 
        $date= new DateTime($dataadmissao);
        $now = new Datetime();
        $tempoempresa= $now->diff($date);
        return $tempoempresa->y . " ano(s), " . $tempoempresa->m . " mês(es), " . $tempoempresa->d . " dias." ;
    }


}



?>

