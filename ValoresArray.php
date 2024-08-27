<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Processamento de Array</title>
</head>
<body>
    <h1>Processamento de Array</h1>

    <?php
    $array = [];
    $totalValores = 500;

    for ($i = 0; $i < $totalValores; $i++) {
        $array[$i] = rand(1, 1000); 
    }

    $maiorValor = $array[0];
    $menorValor = $array[0];
    $soma = 0;

    foreach ($array as $valor) {
        if ($valor > $maiorValor) {
            $maiorValor = $valor;
        }
        if ($valor < $menorValor) {
            $menorValor = $valor;
        }
        $soma += $valor;
    }

    $media = $soma / $totalValores;

    echo "<p><strong>Maior valor:</strong> $maiorValor</p>";
    echo "<p><strong>Menor valor:</strong> $menorValor</p>";
    echo "<p><strong>Média dos valores:</strong> " . number_format($media, 2, ',', '.');
