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
    $ano =  date("Y");
    $valor1 = $_GET['v1'] ?? '2000'; 
    $valor2 = $_GET['v2'] ?? $ano;
    
    
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>"method="get">
                <label for="v1">Em que ano você nasnceu?</label>
                <input type="number" name="v1" id="v1" min="1900" max="<?($ano-1)?>" value="<?=$valor1?>">
                <label for="v2">Quer saber sua idada em que ano?(estamos em <strong><?=$ano?> </strong>)</label>
                <input type="number" name="v2" id="v2" min="1900" value="<?=$valor2?>">
                <input type="submit" value="Qual sera minha idade?">
            </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
           $idade = $ano - $valor1;
            
        echo "<p> Quem nascem em $valor1 vai ter <strong>$idade anos</strong> em $ano
        
        </p>";
        ?>
          
    </section>
</body>
</html>