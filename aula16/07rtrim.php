<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>trim</title>
    </head>
    <body>
        <?php
            $nome = "xxxJoséxdaxSilvaxxx";

            echo($nome);
            echo("<br>");
            echo(strlen($nome));

            echo("<br>");

            $novo = rtrim($nome, "x");

            echo($novo);
            echo("<br>");
            echo(strlen($novo));
        ?>
    </body>
</html>