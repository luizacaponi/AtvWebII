<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Números Ímpares entre 100 e 200</title>
</head>
<body>
    <h1>Números Ímpares entre 100 e 200</h1>

    <?php

    $inicio = 100;
    $fim = 200;

    $numeros_impares = [];

    for ($i = $inicio; $i <= $fim; $i++) {
        if ($i % 2 != 0) { 
            $numeros_impares[] = $i;
        }
    }

    echo "<ul>";
    foreach ($numeros_impares as $numero) {
        echo "<li>$numero</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
