<?php

$email = "marco@gamil.com";

echo "Usando substr para pegar informação no texto: " . PHP_EOL;
echo substr($email, 0, 5) . PHP_EOL;
echo substr($email, 6) . PHP_EOL;

$email2 = "lorene@gmail.com";
echo "Usando substr e strpos para determinar a posição do @ : " . PHP_EOL;
$posicao = strpos($email2, '@');
echo substr($email2, 0, $posicao) . PHP_EOL;
echo substr($email2, $posicao + 1) . PHP_EOL;

$senha = "12345678";

$tamanho = mb_strlen($senha);

if($tamanho < 8){
    echo "Senha inválida" . PHP_EOL;
}else{
    echo "Senha correta" . PHP_EOL;
}

// strtoupper (deixar em letras MAIUSCULAS) e strtolower (deixar em letras minusculas)
var_dump(strtoupper(substr($email2, 0 , $posicao)));

$minusculas = "TESTE DE CONVERSÃO";
var_dump(mb_strtolower($minusculas));