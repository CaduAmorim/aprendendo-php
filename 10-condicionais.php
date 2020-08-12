<?php
/**
 * Condicionais
 * if
 * else
 * elseif
 * switch
 * case
 */

$numero = 15;
if ($numero == 10):
    echo "numero igual a 10";
elseif($numero<=9): 
    echo "numero menor igual a 9";
else:
    echo "numero maior que 10";
endif;


$cor = "amarelo";

switch($cor):
    case "preto":
        echo "Sua cor é preto";
    break;
    case "vermelho":
        echo "Sua cor é vermelho";
    break;
    case "azul":
        echo "Sua cor é azul";
    break;
    default:
        echo "Sua cor não é preto, vermelho ou azul";
endswitch;
