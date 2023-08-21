<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Função</title>
    </head>
    <body>
        <?php
            function soma($a, $b){
                return $a + $b;
            }

            $x = 3;
            $y = 4;
            soma($x, $y);

            echo"A soma é ". soma($x, $y);
        ?>
    </body>
</html>