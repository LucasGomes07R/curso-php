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
    $valor1 = $_GET['v1'] ??1; 
    
    ?>
    <main>
        <h1>Informe um número</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>"method="get">
                <label for="v1">Numero:</label>
                <input type="number" name="v1" id="v1" value="<?=$valor1?>">
                <input type="submit" value="Calcular Raiz">
            </form>
    </main>
    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
            $raizquadrada = sqrt($valor1);
            $raizcubica = pow($valor1,1/3);
            $raizcubica =number_format($raizcubica,2,'.');
            $raizquadrada =number_format($raizquadrada,2,'.');
            
        echo "<p>Analisando o <strong> número $valor1</strong> temos:
         <ul><li>A sua raiz quadrada é <strong> $raizquadrada </strong></li>
         <li> A sua raiz cubica é <strong> $raizcubica </strong> </li></ul> 
        
        </p>";
        ?>

    </section>
</body>
</html>