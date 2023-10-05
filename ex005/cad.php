<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado de processamento</h1>
    </header>
    <main>
        <?php 
        $n = $_GET["nome"] ?? "sem nome"; 
        $s = $_GET["sobrenome"] ?? "sem sobrenome";
        echo "<p>é um prazer te conhecer, $n $s este é o meu site</p>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar a pagina anterior</a></p>
    </main>
</body>
</html>