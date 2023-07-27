<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $valor = $_GET["v"];

            echo "O valor enviado foi $valor.<br>";

            $rq = sqrt($valor);

            echo "A raiz quadrada de $valor é ". number_format($rq, 2). ".<br>";
        ?>

        <a href="exercicioFormulario.html">Voltar</a>
    </body>
</html>