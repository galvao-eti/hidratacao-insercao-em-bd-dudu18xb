<?php
require 'autoload.php';

use job\User;
use job\Product;
use job\Connection;

$conexao = new Connection();
$usuario = new User();
$produto = new Product();

$usuario->populaObjeto(array("email" => "eduardorocha460@gmail.com", "senha" => "posWebDev"));
$produto->populaObjeto(array("nome" => "Lasanha Congelada", "valor" => "20.00"));

if ( $usuario->salvar( $conexao->novaConexao() ) )
{
    echo "Sucesso";
} else 
{
    echo "Não foi possível inserir o usuário!";
}

if ( $produto->salvar( $conexao->novaConexao() ) ) 
{
    echo "<br>Sucesso!";
} else 
{
    echo "Não foi possível inserir o produto!";
}