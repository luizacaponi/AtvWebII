<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Salário</title>
</head>
<body>
    <h1>Cálculo de Salário do Operário</h1>

    <form action="" method="post">
        <label for="codigo">Código do Operário:</label>
        <input type="text" id="codigo" name="codigo" required><br>

        <label for="horas">Número de Horas Trabalhadas:</label>
        <input type="number" id="horas" name="horas" required><br>

        <button type="submit">Calcular Salário</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codigo = isset($_POST['codigo']) ? htmlspecialchars($_POST['codigo']) : '';
        $horas = isset($_POST['horas']) ? (int)$_POST['horas'] : 0;

        $salario_por_hora = 10.00;
        $salario_excedente_por_hora = 20.00;
        $horas_normais_maximas = 50;

        if ($horas > $horas_normais_maximas) {
            $horas_excedentes = $horas - $horas_normais_maximas;
            $salario_normal = $horas_normais_maximas * $salario_por_hora;
            $salario_excedente = $horas_excedentes * $salario_excedente_por_hora;
        } else {
            $horas_excedentes = 0;
            $salario_normal = $horas * $salario_por_hora;
            $salario_excedente = 0;
        }

        $salario_total = $salario_normal + $salario_excedente;

        echo "<h2>Resultado</h2>";
        echo "<p>Código do Operário: $codigo</p>";
        echo "<p>Salário Total: R$ " . number_format($salario_total, 2, ',', '.') . "</p>";
        echo "<p>Salário Excedente: R$ " . number_format($salario_excedente, 2, ',', '.') . "</p>";
    }
    ?>
</body>
</html>
