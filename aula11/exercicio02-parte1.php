<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 02</title>
    </head>
    <body>
        <form method="get" action="exercicio02-parte2.php">
            <?php
                $c = 1;
                while($c <= 5){
                    echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>";
                    $c += 1;
                }
            ?>
            <input type="submit" value="Enviar">

        </form>
    </body>
</html>