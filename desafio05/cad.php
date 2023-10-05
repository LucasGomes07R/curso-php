<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Analisador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $numero = $_GET ["numero"];
            $numeroReal = (int)$numero ;
            $fracao = (int)substr(strpbrk($numero,'.,'),1);
            echo "<ul>
                <li>O numero escolido foi: $numero</li>
                <li>A parte inteira do número é: $numeroReal</li>
                 <li>A parte fracionaria do numero é:$fracao</li>
            </ul>";
        ?>
        <p><a href="javascript:history.go(-1)"><input type="submit" value="Voltar"></a></p>
    </main>
    
</body>
</html>