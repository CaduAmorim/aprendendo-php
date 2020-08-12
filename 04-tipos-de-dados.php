<?php
/******************Escalares ****************/

//String
$nome = "Olá mundo";
var_dump($nome);
echo "<br>";
if (is_string($nome)):
    echo "É uma String";
else:
    echo "Não é uma string";
endif;
echo "<hr>";

//int
$idade = 19;
var_dump($idade);
echo "<br>";
if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;
echo "<hr>";

//float
$altura = 1.71;
var_dump($altura);
echo "<br>";
if(is_float($altura)):
    echo "É um float";
else:
    echo "Não é um float";
endif;
echo "<hr>";

//Boolean
$admin = true;
var_dump($admin);
echo "<br>";
if(is_bool($altura)):
    echo "É um booleano";
else:
    echo "Não é um booleano";
endif;
echo "<hr>";

/******************Compostos******************/
//Array
$carros = array("Gol", "Uno","Camaro",12,20.6,true);
var_dump($carros);
echo "<hr>";

//object
class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}
$cliente = new Cliente();
$cliente -> atribuirNome("Carlos");
var_dump($cliente);
echo "<br>";
if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";
/******************Especiais******************/

//NULL
$cidade = NULL;
var_dump($cidade);
echo "<hr>";

// Resouce
