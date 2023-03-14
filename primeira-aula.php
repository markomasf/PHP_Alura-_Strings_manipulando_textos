<?php

$nome = 'Marco Antonio';

$mesmoSobrenome = str_contains($nome, 'Antonio');

if ($mesmoSobrenome) {
    echo "$nome é da familia";
} else {
    echo "$nome não é da familia";
}
