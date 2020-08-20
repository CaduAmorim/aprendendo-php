<?php

$senha = "123456";
//$senha_db = '$2y$10$7L8fXAd5QDu1T410hKjiVumqwck3QL/RgiWPZtoLv9FaTT05ZD3sq';

/*if(password_verify($senha, $senha_db)){
    echo "Senha válida";
}*/

$novaSenha = base64_encode($senha);
echo "base 64: ".$novaSenha."<br>";
echo "Sua senha é: ". base64_decode($novaSenha);

echo "<hr>";

echo "Senha em Md5: ".md5($senha)."<br>";
echo "Senha em Sha1: ".sha1($senha)."<br>";


$options = [
    'cost' => 15,
];

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
echo $senhaSegura;
