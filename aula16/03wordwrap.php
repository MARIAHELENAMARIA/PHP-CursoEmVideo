<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>wordwrap</title>
    </head>
    <body>
        <?php
            $t = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure neque nulla veritatis, odio quos nostrum dolor voluptatum, alias ab odit blanditiis ex. Dolore rem velit dolorum? Debitis necessitatibus laboriosam quibusdam?";

            //quebra o valor dentro do html gerado
            $res = wordwrap($t, 8, "<br>\n", false);

            //false = matem a palavra inteira, mesmo que o numero de letras seja maior do que o especificado

            echo($res);
        ?>
    </body>
</html>