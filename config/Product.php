<?php
namespace config;

class Product {

    private $nome;
    private $valor;

    public function getNome () 
    {
        return $this->nome;
    }

    public function setNome ( $nome ) 
    {
        $this->nome = $nome;
    }
    
    public function getValor () 
    {
        return $this->valor;
    }

    public function setValor ( $valor ) 
    {
        $this->valor = $valor;
    }

    public function salvar ( $conexao ) 
    {
        $sql = "insert into produto (nome, valor) values(:nome, :valor)";
        $stmt = $conexao->prepare($sql);
        $resultado = $stmt->execute(array(
            ':nome' => $this->nome,
            ':valor' => $this->valor
        ));
        return $resultado;
    }

    use Traits\Trait;
}