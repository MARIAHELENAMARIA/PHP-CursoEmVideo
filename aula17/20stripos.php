<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>stripos</title>
    </head>
    <body>
        <?php
           $frase = "estou aprendendo PHP";
           $pos = stripos($frase, "pHP");

           printf("A string foi encontrada na posição ". $pos. "<br>");
           printf($frase);
        ?>
    </body>
</html>