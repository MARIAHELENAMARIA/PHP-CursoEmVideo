<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contador</title>
    </head>
    <body>
        <?php
            $c = 10;

            do{
                echo "$c ";
                $c--;
            }while($c >= 1);
        ?>
    </body>
</html>