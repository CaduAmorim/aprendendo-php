<?php
// Arrays numéricos

$carros = array("Mercedes","BMW","Pegeout");
print_r($carros);

echo "<br>";

$celulares = array(1=> "Samsung", 2=> "Galaxy", 3=> "Iphone");
$celulares[]= "Motorola";
print_r($celulares);
echo $celulares[1];

$computadores = array();
$computadores[] = "dell";
$computadores[] = "mac";
$computadores[] = "linux";
$computadores[] = "Windows";
echo "<br>";
print_r($computadores);

$cliente = ["Carlos","João", "Marcelo"];
echo "<br>";
print_r($cliente);

// Count
echo "<br>";
echo count($celulares);
$total  = count($carros);
echo "<br>";
echo $total;

// Foreach
echo "<hr>";
foreach($celulares as $ce) {
    echo $ce."<br>";
}

echo "<hr>";

foreach($carros as $ca) {
    echo $ca."<br>";
}
echo "<hr>";

//Arrays associativos
//Quando os indices são Strings
$pessoa = array("Nome"=> "Carlos", "Idade" => 19, "Altura"=>1.75);
$pessoa["Cidade"] = "Palmas";
echo $pessoa["Cidade"];
echo "<hr>";
foreach ($pessoa as $indice => $conteudo) {
    echo $indice.": ".$conteudo."<br>";
}

//Arrays multidimensionais
echo "<hr>";
$times = array(
    "cariocas"=>array("campeao"=>"flamengo","vice"=>"vasco","terceiro"=>"botafogo", "ultimo"=>"fluminense"),
    "paulistas"=> array("campeao"=>"Corintians","vice"=>"São Paulo", "terceiro"=>"Palmeiras"),
    "mineiro"=> array("campeao"=> "atlético mineiro","vice"=>"cruzeiro")
);

echo $times["cariocas"]["campeao"];
echo "<br>";

foreach($times["cariocas"] as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
echo "<br>";
foreach($times["paulistas"]as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}
echo "<br>";
foreach($times["mineiro"] as $indice => $valor) {
    echo $indice.": ".$valor."<br>";
}