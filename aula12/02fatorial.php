<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fatorial</title>
    </head>
    <body>
        <?php
            $v = isset($_GET["val"]) ? $_GET["val"] : 1;

            echo "Calculando o fatorial de $v.<br>";

            $c = $v;
            $fat = 1;

            do{
                $fat = $fat*$c;
                $c--;
            }while($c >= 1);

            echo "$v ! = $fat";
        
        ?>

        <br>
        <a href="02index.html">Voltar</a>
    </body>
</html>