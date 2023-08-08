<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contador</title>
    </head>
    <body>
        <?php
            $c = 1;
            while($c <= 10){
                echo $c. "<br>";
                $c += 1;
            }

            $c = 10;
            while($c >= 1){
                echo $c. "<br>";
                $c -= 1;
            }
        ?>
    </body>
</html>