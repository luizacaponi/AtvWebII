<?php
$nome = "Luiza";

$nomeInvertido = "";

$tamanho = 0;
while ($nome[$tamanho] !== "") {
    $tamanho++;
}

for ($i = $tamanho - 1; $i >= 0; $i--) {
    $nomeInvertido .= $nome[$i];
}

echo "Nome original: " . $nome . "<br>";
echo "Nome invertido: " . $nomeInvertido;
