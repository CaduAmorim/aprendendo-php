<?php

/*
for ($i = 1; $i <= 10; $i++){
    echo "O contador $i <br>";
}
*/
echo "<hr>";
for ($i = 1; $i <= 10; $i++):
    echo "7 x $i = ".($i*7)."<br>";
endfor;

echo "<hr>";

$cores = array("Verde", "Vermelho", "Azul", "Preto");

foreach($cores as $indice => $conteudo):
    echo $indice." - ".$conteudo."<br>";
endforeach;