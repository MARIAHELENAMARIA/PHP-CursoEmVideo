<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variáveis Variantes</title>
    </head>
    <body>
        <?php
            $x = "abc";
            $$x = "def";

            echo "O conteúdo da variável x é $x <br>";
            echo "A variavél abc criadada recebeu o valor def <br>";
            
        ?>
    </body>
</html>