<?php

$telefones = ['(24) 99999 - 9999', '(21) 99999 - 9999', '(24) 2222 - 2222'];

foreach($telefones as $telefone) {
    $telefoneValido = preg_match('/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/' , $telefone);
    if($telefoneValido){
        echo 'Telefone Válido' . PHP_EOL;
    }else{
        echo 'Telefone Invalido' . PHP_EOL;
    }
}