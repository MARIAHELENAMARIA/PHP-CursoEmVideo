<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>implode</title>
    </head>
    <body>
        <?php
            $vetor[0] = "Curso";
            $vetor[1] = "em";
            $vetor[2] = "Vídeo";

            $texto = implode("#", $vetor);
            $texto2 = join("#", $vetor);

            print($texto);
            echo("<br>");
            print($texto2);
        ?>
    </body>
</html>