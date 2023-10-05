<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 

                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
                session_start();
                $_SESSION = "começou!";

                echo "<h1>Super global Get </h1>";
                var_dump($_GET);
                echo "<h1>Super global Post </h1>";
                var_dump($_POST);

                echo "<h1>Super global REQUEST</h1>";
                var_dump($_REQUEST);
                echo "<h1>Super global cookie</h1>";
                var_dump($_COOKIE);


                echo "<h1>Super global SECTION</h1>";
                var_dump($_SESSION);
            ?>

        </pre>
    </main>
    
</body>
</html>