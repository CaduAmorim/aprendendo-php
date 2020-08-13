<?php
/**
 * Funções para Strings:
 * strtoupper - maiúsculo
 * strtolower - minúsculo
 * substr - corta pedaço de uma string
 * str_pad - adiciona conteudo
 * str_repeat
 * strlen
 * str_replace
 * strpos
 */
// strtopper
$nome = "Carlos Eduardo";
$novoNome = strtoupper($nome);
echo $novoNome;

// strtolower
$nome = "Carlos Eduardo";
$novoNome = strtolower($nome);
echo $novoNome;

// substr
$mensagem = "Olá mundo";
echo substr($mensagem, 4, 6);

// str_pad
$objeto = "mouse";
$novoObjeto = str_pad($objeto, 9, "*", STR_PAD_BOTH);
echo $novoObjeto;

// str_repeat
$string = str_repeat("Carlos tá chegando a hora!<br>", 50);
echo $string;

// strlen
$mensagem = "Olá mundo";
echo strlen($mensagem);

// str_replace
$texto = "Carlos o sucesso te aguarda";
$novoTexto = str_replace("aguarda","ama", $texto);
echo $novoTexto;

//strpos
$texto = "Carlos o sucesso te aguarda";
echo strpos($texto, "te");
