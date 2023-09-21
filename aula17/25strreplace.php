<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>str_replace</title>
    </head>
    <body>
        <?php
            $frase = "Gosto de estudar Matemática!";

            $novaFrase = str_replace("Matemática", "PHP", $frase);

            echo "$frase <br> $novaFrase";

            $novaFrase = str_ireplace("Matemática", "PHP", $frase);
        ?>
    </body>
</html>