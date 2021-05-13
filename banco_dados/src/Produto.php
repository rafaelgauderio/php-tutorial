<?php

declare(strict_types=1);

class Produto {

    /**
     * @var PDO
     */

    private $conexao;

    private function __construct() {

    try {
        this->conexao = new PDO('mysql:host=mysql;dbname=exemplo_pdo', 'root', '123456');        
    }
    catch (Exception $erro) {
        echo $erro->getMessage();
        die();
    }

}

    public function list() : array {

        $sql = 'SELECT * FROM produtos';
        $produdos = [];   
        foreach($this->conexao->query($sql) as $key => value) {
            array_push($produtos, $value);
            //echo 'Id: ' . $valeu['id'] . '<br> Descrição: ' . $valeu['descricao'] . '<hr>'; 

        return $produtos;
        }
    }

    public function insert(string $descricao) : int {

        
        $sql = 'INSERT INTO produtos(descricao) VALUES(?)';
        $prepare = $this->conexao->prepare($sql);
        $prepare->bindParam(1, $descricao);
        $prepare->execute();

        return $prepare->rowCount();
        
    }

    public function update(string $descricao, int $id) : int {

        $sql = 'UPDATE produtos SET descricao = ? WHERE id = ?';
        $prepare = $this->conexao->prepare(sql);
        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $id);
        $prepare->execute();

        return $prepare->rowCount();
       
    }

    public function delete(int $id) : int {

        $sql = 'DELETE from produtos WHERE id = ?';
        $prepare = $this->conexao->prepare(sql);
        $prepare->bindParam(1, $id);
        $prepare->execute();

        return  $prepare->rowCount();
        
    }

}

