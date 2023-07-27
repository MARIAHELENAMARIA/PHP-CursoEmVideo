<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eleição</title>
    </head>
    <body>
        <?php
            $ano = $_GET["an"];

            $idade = 2023 - $ano;

            echo "Quem nasceu em $ano tem $idade anos.<br>";

            $tipo = ($idade>=18 && $idade<65) ? "OBRIGATORIO" : "NAO OBRIGATORIO";

            echo "Seu voto é $tipo.";
        ?>
    </body>
</html>