<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>substr</title>
    </head>
    <body>
        <?php
            $site = "Curso em Vídeo";
            $sub = substr($site, 0, 5);

            echo "$sub <br>";

            $sub = substr($site, 6);

            echo "$sub <br>";

            $sub = substr($site, -3);

            echo "$sub <br>";

            $sub = substr($site, -5, 2);

            echo "$sub <br>";
        ?>
    </body>
</html>