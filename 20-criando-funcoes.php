<?php
//Criando funções

function exibiNome($nome){
    echo "Meu nome é $nome";
}

exibiNome("Eduardo");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if ($media >= 7):
        echo "O aluno $nome foi aprovado com a média de $media <br>";
    else: 
        echo "O aluno $nome foi reprovado<br>";
    endif;
}

calcularMedia("Carlos", 8, 9, 9, 10);
calcularMedia("chico", 6, 7, 8, 5);