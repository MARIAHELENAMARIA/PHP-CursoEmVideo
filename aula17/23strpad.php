<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>str_pad</title>
    </head>
    <body>
        <?php
            //NÃO ESTÁ FUNCIONANDO
            $nome = "Maria";
            $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);

            //STR_PAD_RIGHT
            //STR_PAD_CENTER
            //STR_PAD_LEFT

            print($novo . " é muito linda, essa princesa.");
        ?>
    </body>
</html>