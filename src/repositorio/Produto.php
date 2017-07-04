<?php

class Produto implements Repositorio {

    private $conn;
    private $controller;

    public function save() {
        $st = $this->conn->prepare("insert into produto (nome ,valor) values (:nome,:valor)");

        $st->bindParam(':nome', $this->controller->nome);
        $st->bindParam(':valor', $this->controller->valor);

        $st->execute();

        if ($st->errorCode() <> '00000') {
            throw new \Exception($st->errorInfo()[2]);
        }
    }

}
