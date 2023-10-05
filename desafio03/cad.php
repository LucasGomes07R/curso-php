<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main><h1>Conversor de Moedas V1.0</h1>
        <?php 
            $real = $_GET["dinheiro"];
            $cotacao = 4.87;
            $dolar = $real/$cotacao;
            $dolar = number_format($dolar,2,'.',);
            echo "Seus R$ $real equivalem a <strong> US$ $dolar </strong>"; 
            echo "<p> <strong>Cotaçao fixa de R$ 4.87</strong> informada diretamente no codigo </p>"
        ?>
        <p><a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a></p>
    </main>
    
</body>
</html>