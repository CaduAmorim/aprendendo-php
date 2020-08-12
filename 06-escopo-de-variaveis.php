<?php
// ESCOPO GLOBAL
$nome = "Carlos Eduardo";

function exibeNome() {
    global $nome;
    echo $nome;
}

exibeNome();

////////////////////////

function exibeCidade() {
    //ESCOPO GLOBAL
    global $cidade;
    $cidade = "Rio de Janeiro";
}

exibeCidade();
echo "$cidade";