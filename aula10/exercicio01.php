<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 1</title>
    </head>
    <body>
        <?php
            $n = isset($_GET["num"]) ? $_GET["num"] : 0;
            $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;

            switch($o){
                case 1:
                    $r = $n*2;
                    break;
                case 2:
                    $r = $n ^ 3;
                    break;
                case 3:
                    $r = sqrt($n); //$n^(1/2)
                    break;
                default:
                    echo "Opção Inválida.";
            }

            echo "O resultado da operação solicitada fo $r.";
        ?>
        
        <br>
        <a href="exercicio01.html">Voltar</a>

    </body>
</html>