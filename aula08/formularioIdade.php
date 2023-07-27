<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário 2</title>
    </head>
    <body>
        <?php
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[não informado]";

            /*$nome = $_GET["nome"];
            $ano = $_GET["ano"];
            $sexo = $_GET["sexo"];*/

            $idade = date("Y") - $ano;

            echo "$nome tem $idade anos.<br>";
            echo "Sexo: $sexo.<br>";
        ?>
        <a href="exercicioFormulario2.html">Voltar</a>
    </body>
</html>