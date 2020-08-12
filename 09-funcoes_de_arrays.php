<?php
/*
    * is_array($array) = verificar se uma determinada variável é um array
    * in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array
    * array_key($array) = retorna um novo array com as chaves do array passado como parâmetro
    * array_values($array) = retorna um novo array com os valores do array passado como parâmetro
    * array_merge($array1, $array2) = agrega o conteúdo dos dois arrays 
    * array_pop($array) = exclui a última posição do array
    * array_shift($array) = exclui a primeira posição do array
    * array_unshift($array, "valor") = adiciona um ou mais  elemento no início do array
    * array_push($array, "valor", "valor") 
    * array_combine($keys, $values) = mescla os dois arrays passados
    * array_sum() = calcula a soma dos elementos de um array
    * explode("/", "20/01/2001") = transforma string em array
    * implode("/","$arr") = transforma array em string

*Array para os exemplos abaixo
$nomes = array("Primo"=>"Emanuel", "Irmao"=>"João Vitor", "Pai"=>"Carlos", "Mae"=>"Antonia");
// FUNÇÃO is_array
if(is_array($nomes)):
    echo "é um array";
else:
    echo "não é um array";
endif;

// FUNÇÃO in_array
echo in_array("Emanuel",$nomes);
if(in_array("Emanuel",$nomes)):
    echo "O nome está no array";
else:
    echo "O nome não está array";
endif;

// FUNÇÃO array_key
$keys = array_keys($nomes);
print_r($keys);

//FUNÇÃO array_values
$values = array_values($nomes);
print_r($values);

// FUNÇÃO array_merge
$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc","Factor");

$veiculos = array_merge($carros, $motos);

print_r($veiculos);

// FUNÇÃO array_pop
$carros = array("Camaro", "Uno", "Gol");
array_pop($carros);
echo array_pop($carros);
print_r($carros);

// FUNÇÃO array_shift
$carros = array("Camaro", "Uno", "Gol");
array_shift($carros);
echo array_shift($carros);
print_r($carros);

// FUNÇÃO array_unshift
$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
echo "<br>";
array_unshift($carros, "Mercedes","C200","BMW");
print_r($carros);

// FUNÇÃO array_unshift
$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
echo "<br>";
array_push($carros, "Mercedes","C200","BMW");
print_r($carros);

// FUNÇÃO array_combine
$carros = array("Camaro", "Uno", "Gol");
$marcas = array("Cherolet", "Fiat", "Volkwagen");
print_r($carros);
echo "<br>";
print_r($marcas);
echo "<br>";
$veiculos = array_combine($marcas,$carros);
print_r($veiculos);

// FUNÇÃO array_sum
$soma = array(5,6,7,8,10);
$total = array_sum($soma);
echo array_sum($soma);
echo "<br>";
echo $total;

// FUNÇÃO explode 
$data = "10/04/2001";

$array = explode("/",$data);
print_r($array);

$nome = "Eu sou o Carlos Eduardo";

$arrayDeNome = explode(" ", $nome);
print_r($arrayDeNome);

// FUNÇÃO explode
$data = "10/04/2001";
$array = explode("/",$data);
print_r($array);
$nome = "Eu sou o Carlos Eduardo";
$arrayDeNome = explode(" ", $nome);
print_r($arrayDeNome);
*/
$nomes = array("Carlos", "Eduardo", "Neusa", "Antonia");
$stringNomes = implode(", ",$nomes);
echo $stringNomes;