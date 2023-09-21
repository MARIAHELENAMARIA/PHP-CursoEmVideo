<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>strpos</title>
    </head>
    <body>
        <?php
           $frase = "estou aprendendo PHP";
           $pos = strpos($frase, "PHP");

           printf("A string foi encontrada na posição ". $pos. "<br>");
           printf($frase);
        ?>
    </body>
</html>