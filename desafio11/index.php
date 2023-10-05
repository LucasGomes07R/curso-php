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
    $valor2 = $_GET['percentual']?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>"method="get">
                <label for="v1">Preço do produto (R$):</label>
                <input type="number" name="v1" id="v1" value="<?=$valor1?>">
                <label for="v2">Qual será o percentual de ajuste  <strong>(<span id="porcentagemExibida"></span>)</strong></label>
                <input type="range" name="percentual" id="percentual"step="1"value="<?=$valor2?>"oninput="atualizarPorcentagem(this.value)">
                <input type="submit" value="Reajustar">
            </form>
    </main>
    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <?php 
           $porcentagem =  $valor2/100;
           $porcentagemformatada =  $porcentagem*100;
           $formatadacomsimbolo =  $porcentagemformatada. '%';
           $reajuste = $porcentagem * $valor1;
           $preçoFinal = $valor1 + $reajuste;   
        echo "<p> O produto que custava  <strong>R$ $valor1</strong> com <strong>$formatadacomsimbolo</strong> de aumento vai passar a custar <strong>$preçoFinal, a partir de agora!</strong>
        
        </p>";
        ?>
        <script>
        function atualizarPorcentagem(valor) {
            var porcentagemExibida = document.getElementById('porcentagemExibida');
            var percentualExibido = document.getElementById('percentualExibido');
            
            porcentagemExibida.textContent = valor + '%';
            percentualExibido.textContent = valor + '%';
        }
    </script>
          
    </section>
</body>
</html>