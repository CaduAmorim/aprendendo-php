<?php
/**
 * Funções para Números:
 * number_format - Formata um numero inserindo pontos e virgulas
 * round - arredonda valores (depois do ponto acima de 5 pra mais)
 * ceil - arredonda para cima (ex.: 5.1 = 6);
 * floor - arredonda sempre para baixo 
 * rand - numeros aleatórios dentro de uma faixa
 */

// number_format
$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco";

// round
echo round(4.49);

// ceil
echo ceil(4.49);

//floor
echo floor(3.99);

// rand
echo rand(1,100);