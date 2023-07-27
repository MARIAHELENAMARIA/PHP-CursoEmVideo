<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variáveis Referenciadas</title>
    </head>
    <body>
        <?php
            #variáveis referenciadas

            
            $a = 3;
            $b = $a;
            $b += 5;

            echo "A variável a vale $a <br>";
            echo "A variável b vale $b <br>";

            $c = 3;
            $d = &$c;
            $c += 5;

            echo "A variável c vale $c <br>";
            echo "A variável d vale $d <br>";


        ?>
    </body>
</html>