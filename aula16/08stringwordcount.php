<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>str_word_count</title>
    </head>
    <body>
        <?php
            $frase = "eu vou estudar php";

            $cont = str_word_count($frase, 0);

            echo($frase);
            echo("<br>");
            echo($cont);

            $cont2 = str_word_count($frase, 1);

            echo("<br>");
            print_r($cont2);

            $cont3 = str_word_count($frase, 2);

            echo("<br>");
            print_r($cont3);
        ?>
    </body>
</html>