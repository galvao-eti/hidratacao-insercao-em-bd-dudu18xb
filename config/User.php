<?php
namespace config;

use config\Connection;

class User {

    private $email;
    private $senha;

    public function getEmail () 
    {
        return $this->email;
    }

    public function setEmail ( $email ) 
    {
        $this->email = $email;
    }

    public function getSenha () 
    {
        return $this->senha;
    }

    public function setSenha ( $senha ) 
    {
        $this->senha = $senha;
    }

    public function salvar ( $conexao ) 
    {
        $sql = "insert into usuario (email, senha) values(:email, :senha)";
        $stmt = $conexao->prepare($sql);
        $resultado = $stmt->execute(array(
            ':email' => $this->email,
            ':senha' => $this->senha
        ));
        return $resultado;
    }

    use Traits\Trait;
}