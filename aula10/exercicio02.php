<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 2</title>
    </head>
    <body>
        <?php
            $d = isset($_GET["ds"]) ? $_GET["ds"] : 0;

            switch ($d){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar!";
                    break;
                case 7:
                case 8:
                    echo "Descanse, pequeno gafanhoto.";
                    break;
                default:
                    echo "Dia da semana inválido.";    
            }
        ?>

        <br>
        <a href="exercicio02.html">Voltar</a>
    </body>
</html>