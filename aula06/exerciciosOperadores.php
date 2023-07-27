<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operadores</title>
    </head>
    <body>
        <?php
            $preco = $_GET["p"];

            echo "O preço do produto é R$". number_format($preco, 2);

            //$preco = $preco + ($preco*0.1);
            $preco += ($preco*0.1);

            //echo "<br>O preço com acréscimo é R$$preco";
            echo "<br>O preço com acréscimo é R$$". number_format($preco, 2);

            //$preco -= ($preco*0.1);
            //echo "<br>O preço com desconto é R$$preco";
        ?>
    </body>
</html>