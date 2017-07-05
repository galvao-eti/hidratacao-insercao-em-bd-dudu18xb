<?php

namespace config;

class Connection{
    public function novaConexao() {
        $dsn = 'mysql:dbname=hidratacao;host=localhost';
        $dbn = new \PDO($dsn, 'root', '');
        return $dbn;
    }
}