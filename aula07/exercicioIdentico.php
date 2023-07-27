<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operador Idêntico</title>
    </head>
    <body>
        <?php
            $a = 3;
            $b = "3";

            echo "a = $a | b = $b<br>";

            $r = ($a==$b) ? "SIM" : "NAO";
            
            echo "As variáveis a e b são iguais? $r<br>";

            $r = ($a===$b) ? "SIM" : "NAO";

            echo "As variáveis a e b são idênticas? $r<br>";
        ?>
    </body>
</html>