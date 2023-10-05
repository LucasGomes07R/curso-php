<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main><h1>Conversor de Moedas V2.0</h1>
        <?php 
            $ini =date("m-d-Y", strtotime("-7days")) ;
            $fim = date("m-d-Y");
            $url = ('https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$ini.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao');
            $dados = json_decode(file_get_contents($url),true);
            $cotaçao = $dados["value"][0]["cotacaoCompra"];
            $cotaçao = $cotaçao = number_format($cotaçao,2,'.',);
            $real = $_GET["dinheiro"];
            $dolar = $real/$cotaçao;
            $dolar = $dolar = number_format($dolar,2,'.',);
            echo "Seus R$ $real equivalem a <strong> US$ $dolar </strong>"; 
            echo "<p> <strong>Cotação de $cotaçao disponibilizada pelo Banco Central!</p>"
            
        ?>
        <p><a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a></p>
    </main>
    
</body>
</html>