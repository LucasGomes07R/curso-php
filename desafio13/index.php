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
        <h1>Caixa Eletronico</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>"method="get">
                <label for="v1">Qual valor deseja sacar(R$)?</label>
                <input type="number" name="v1" id="v1" step = "5">
                <input type="submit" value="Calcular">
            </form>
    </main>
    <section id="resultado">
        <h2>Saque de R$<?= $valor1?> realizado</h2>
        <?php 

        if(!is_numeric($valor1) || $valor1 <=0 ) {
            echo "insira um valor valido";
        }else{
            $notas100 = 0;
            $notas50 = 0;
            $notas20 = 0;
            $notas10 = 0;
            $notas5 = 0;
        }while($valor1 >=100){
            $notas100++;
            $valor1 -= 100;
        }while ($valor1 >= 50) {
            $notas50++;
            $valor1 -= 50;
        }

        while ($valor1 >= 20) {
            $notas20++;
            $valor1 -= 20;
        }

        while ($valor1 >= 10) {
            $notas10++;
            $valor1 -= 10;
        }

        while ($valor1 >= 5) {
            $notas5++;
            $valor1 -= 5;
        };

        


         echo "<p> O caixa eletronico vai te entragar as seguintes notas:
         <ul>
         <li>
            R$ 100,00 x $notas100 
         </li>
         <li>
            R$ 50,00 x $notas50
         </li>
         <li>
            R$ 20,00 x $notas20
         </li>
         <li>
            R$ 10,00 x $notas10
         </li>
         <li>
            R$ 5,00 x $notas5
         </li>
         </ul>
        </p>"
        ?>
        
          
    </section>
</body>
</html>