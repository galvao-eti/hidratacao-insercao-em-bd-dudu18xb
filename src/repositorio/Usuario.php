<?php

class Usuario implements Repositorio {

    private $conn;
    private $controller;

    public function save() {
        $st = $this->conn->prepare("
            insert into usuario (email, senha) values (:email,:senha)");

        $st->bindParam(':email', $this->controller->email);
        $st->bindParam(':senha', $this->controller->senha);

        $st->execute();

        if ($st->errorCode() <> '00000') {
            throw new \Exception($st->errorInfo()[2]);
        }
    }

}
