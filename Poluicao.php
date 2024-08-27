<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Notificação de Poluição</title>
</head>
<body>
    <h1>Notificação de Poluição</h1>

    <form action="" method="post">
        <label for="indice">Índice de Poluição:</label>
        <input type="text" id="indice" name="indice" required>
        <button type="submit">Emitir Notificação</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $indice = isset($_POST['indice']) ? (float)$_POST['indice'] : 0.0;

        $notificacao = "";

        if ($indice >= 0.5) {
            $notificacao = "Todas as indústrias dos 3 grupos devem suspender suas atividades.";
        } elseif ($indice >= 0.4) {
            $notificacao = "Indústrias dos 1º e 2º grupos devem suspender suas atividades.";
        } elseif ($indice >= 0.3) {
            $notificacao = "Indústrias do 1º grupo devem suspender suas atividades.";
        } elseif ($indice < 0.05 || $indice > 0.25) {
            $notificacao = "Índice de poluição fora do intervalo aceitável (0,05 a 0,25).";
        } else {
            $notificacao = "Índice de poluição está dentro do intervalo aceitável.";
        }

        echo "<h2>Resultado</h2>";
        echo "<p>$notificacao</p>";
    }
    ?>
</body>
</html>
