<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificar Número</title>
</head>
<body>
    <h1>Verifique se o número é par ou ímpar e positivo ou negativo</h1>

    <form action="" method="post">
        <label for="numero">Digite um número inteiro:</label>
        <input type="text" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;

        if ($numero > 0) {
            $tipo = "positivo";
        } elseif ($numero < 0) {
            $tipo = "negativo";
        } else {
            $tipo = "zero"; 
        }

        if ($numero % 2 == 0) {
            $paridade = "par";
        } else {
            $paridade = "ímpar";
        }

        echo "<h2>Resultado</h2>";
        echo "<p>O número $numero é $paridade e $tipo.</p>";
    }
    ?>
</body>
</html>
