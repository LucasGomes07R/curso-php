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
    $valor1 = $_GET['v1'] ;
    $valor2 = $_GET['v2'];
    $peso1 = $_GET['p1'];
    $peso2 = $_GET['p2'];
    
    ?>
    <main>
        <h1>Medias Aritimeticas</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>"method="get">
                <label for="v1">1º Valor:</label>
                <input type="number" name="v1" id="v1" required value="<?=$valor1?>">
                <label for="p1">1º Peso:</label>
                <input type="number" name="p1" id="p1" min="1" required value="<?=$peso1?>">
                <label for="v1">2º Valor:</label>
                <input type="number" name="v2" id="v2" required value="<?=$valor2?>">
                <label for="p2">2º Peso:</label>
                <input type="number" name="p2" id="p2" min="1" required value="<?=$peso2?>">

                <input type="submit" value="Calcular Media">
            </form>
    </main>
    <section id="resultado">
        <h2>Calculo das medias</h2>
        <?php 
            $mediaS = ($valor1 + $valor2) / 2 ;
            $mediaP =( ($valor1*$peso1) + ($valor2*$peso2)) / ($peso1+$peso2);
            $mediaS = number_format($mediaS,2);
            $mediaP = number_format($mediaP,2);
            
        echo "<p> Analisando os valores $valor1, $valor2;
        <ul><li> A <strong> Media Aritimetica Simples</strong> entros os valores é igual a: <strong> $mediaS </strong> </li>
        <li> A <strong> Media Aritimetica Ponderada</strong> com peso $peso1 e $peso2 é igual a:<strong> $mediaP </strong> </li>
        </ul>
        
        </p>";
        ?>
          
    </section>
</body>
</html>