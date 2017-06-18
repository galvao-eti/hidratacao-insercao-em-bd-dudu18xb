# Hidratação e Inserção em BD - Pós Alfa 2017

## Instruções:
* Caso não possua ainda, crie uma conta no Github
* Clique neste [link](https://classroom.github.com/assignment-invitations/e5bc51428211f8a2b278e11630eab1e7) para aceitar o convite para o trabalho
* Clone o seu repositório - que será criado assim que aceitar o convite - e trabalhe nele.
* No arquivo README.md do seu repositório coloque o seu nome completo para que o professor possa identificá-lo(a) corretamente.
* O banco de dados para testes pode ser encontrado aqui mesmo, na pasta database
* O trabalho deverá ser entregue (commit e push no seu repositório) até o dia **6 de Julho de 2017**.

## Conceitos

* Hidratação é o processo de receber uma estrutura de dados (tipicamente um array) e utilizá-la para inserir valores em um objeto. A principal dica é de que haja uma relação entre o array de dados e os objetos, ou seja, cada índice do array corresponda ao nome de um atributo do objeto.

## Sobre o trabalho
1.  Objetivo: Criar uma trait de hidratação que possa ser usada em qualquer classe
1. Demonstrar o uso dessa trait salvando um objeto usuario e um objeto produto na base de dados. Isso significa que o seu trabalho final deverá ter 2 classes (Usuario e Produto) e uma Trait.

## Dicas

* Um array contendo os atributos de um objeto pode ser obtido através do uso da função [get_object_vars](http://php.net/manual/en/function.get-object-vars.php).
* Um array contendo os atributos de uma classe pode ser obtido através do uso da função [get_class_vars](http://php.net/manual/en/function.get-class-vars.php).
* O nome da classe em uso pode ser obtido através da constante especial \__CLASS__.