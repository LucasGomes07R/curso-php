<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor1 = $_GET['v1'] ??0; 
    $valor2 = 1380.00;
    ?>
    <main>
        <h1>Informe seu salario</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>"method="get">
                <label for="v1">Salario (R$)</label>
                <input type="number" name="v1" id="v1" step="0.01" value="<?=$valor1?>">
                <input type="submit" value="Calcular">
            </form>
    </main>
    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
        $salario = $valor1 / $valor2;
        $salario = number_format($salario);
        $restoSalario = $valor1 % $valor2;
        $valor1 = number_format($valor1,2,'.');
        echo "<p>Quem recebe um salário de R$ $valor1 ganha  <strong>$salario salarios minimos + R$ $restoSalario</strong></p>";
        ?>

    </section>
</body>
</html>