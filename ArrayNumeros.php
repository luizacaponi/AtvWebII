<?php

$array = [];

for ($i = 1; $i <= 20; $i++) {
    $array[] = $i; 
}

$soma = 0;

foreach ($array as $numero) {
    $soma += $numero; 
}

echo "A soma de todos os números no array é: " . $soma . "\n";

