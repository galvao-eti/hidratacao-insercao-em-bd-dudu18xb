<?php
    spl_autoload_register(function ($class) {
    //prefixo do espaço para nome específico do projeto
    $prefix = '';
    //diretório base para o prefixo do namespace
    $base_dir = __DIR__ . '/src/';  
    //a classe usa o prefixo do namespace?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }
    // obtenha o nome relativo da classe
    $relative_class = substr($class, $len);
    // Substitua o prefixo do namespace pelo diretório base, substitua o namespace
    // separadores com separadores de diretório no nome relativo da classe, anexar
    // com .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    // Se o arquivo existir, exija-o
    if (file_exists($file)) {
        require $file;
    }
});