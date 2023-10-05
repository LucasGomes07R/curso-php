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
    $valor2 = $_GET['v2'] ??1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>"method="get">
                <label for="v1">Dividendo</label>
                <input type="number" name="v1" id="v1" value="<?=$valor1?>">
                <label for="v2">Divisor</label>
                <input type="number" name="v2" id="v2"value="<?=$valor2?>">
                <input type="submit" value="Analisar">
            </form>
    </main>
    <section >
        <h2>Estrutura da divisao</h2>
        <?php 
        $divisao = intdiv($valor1, $valor2);
        $resto = $valor1 % $valor2;
        
        
        ?>
        <table class="divisao">
        <tr>
            <td><? $valor1?></td>
            <td><? $valor2?></td>
        </tr>
        <tr>
            <td><? $resto?></td>
            <td><? $divisao?></td>
        </tr>
        </table>


        
            

            
            

        

    </section>
</body>
</html>