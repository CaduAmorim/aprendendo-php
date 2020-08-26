<?php
/** Manipulação de Arquivos
 * fopen()
 * fclose()
 * fwrite()
 * !feof()
 * fgets()
 * filesize
 */

$arquivo = 'arquivo.txt';
$conteudo = "Conteúdo teste\r\n";
$tamanhoArquivo = filesize($arquivo);

//$arquivoAberto = fopen($arquivo, 'a');
$arquivoAberto = fopen($arquivo, 'r');

while(!feof($arquivoAberto)){
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha."<br>";
}

fwrite($arquivoAberto, $conteudo);
fclose($arquivoAberto);