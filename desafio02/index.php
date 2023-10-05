<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><header>
    
</header>
<section>
    
        <h1>Trabalhando com  Números aleatorios</h1>
        <p>Gerando numeros aleatorios entre 0 e 100</p>
        <p>O valor gerado foi <?php echo mt_rand(1,100);?>  </p>
       <?php 
        echo ("<script>
        function atualizarPagina() {
            location.reload(); // Recarrega a página
        }
        </script>")
       ?>
       <button onclick="atualizarPagina() "> Gerar outro </button>
    
</section>
    
</body>
</html>