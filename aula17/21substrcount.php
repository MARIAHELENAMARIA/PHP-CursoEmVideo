<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>substr_count</title>
    </head>
    <body>
        <?php
           $frase = "estou aprendendo PHP no curso em vídeo de PHP";
           $cont = substr_count($frase, "PHP");

           printf($frase. "<br>". $cont);
        ?>
    </body>
</html>