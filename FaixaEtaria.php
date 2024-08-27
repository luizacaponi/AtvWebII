<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Classificação de Nadador</title>
</head>
<body>
    <h1>Classificação de Nadador</h1>

    <form action="" method="post">
        <label for="idade">Digite a idade do nadador:</label>
        <input type="number" id="idade" name="idade" required>
        <button type="submit">Classificar</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = isset($_POST['idade']) ? (int)$_POST['idade'] : 0;

        if ($idade >= 5 && $idade <= 7) {
            $categoria = "Infantil A";
        } elseif ($idade >= 8 && $idade <= 11) {
            $categoria = "Infantil B";
        } elseif ($idade >= 12 && $idade <= 13) {
            $categoria = "Juvenil A";
        } elseif ($idade >= 14 && $idade <= 17) {
            $categoria = "Juvenil B";
        } elseif ($idade >= 18) {
            $categoria = "Adultos";
        } else {
            $categoria = "Idade fora do intervalo considerado.";
        }

        echo "<h2>Resultado</h2>";
        echo "<p>Categoria do nadador: $categoria</p>";
    }
    ?>
</body>
</html>
