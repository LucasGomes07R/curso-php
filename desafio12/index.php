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
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>"method="get">
                <label for="v1">Qual total de Segundos:</label>
                <input type="number" name="v1" id="v1" min="0"step="1" required <?$valor1?>>
                <input type="submit" value="Calcular">
            </form>
    </main>
    <?php 
        $sobra = $valor1;
        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        $dia = (int)($sobra / 86_400);
        $sobra =$sobra % 86_400;
        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        $minuto = (int)($sobra/ 60);
        $segundo = $sobra;
    
    ?>
    <section>

        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <?=$valor1?> segundos equivalem a um total de:

        </p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minuto?> minuto</li>
            <li><?=$minuto?> segundos</li>

        </ul>
        
          
    </section>
</body>
</html>