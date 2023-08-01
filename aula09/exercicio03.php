<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 03</title>
    </head>
    <body>
        <?php
            $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0.0;
            $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 0.0;

            $media = ($n1 + $n2)/2;

            echo "A média entre as notas $n1 e $n2 é ". number_format($media, 2). ".";

            if($media < 5){
                echo "situação do aluno: <mark>REPROVADO</mark>";
            }
            elseif($media >=5 && $media < 7){
                echo "situação do aluno: <mark>RECUPERAÇÃO</mark>";
            }
            else{
                echo "situação do aluno: <mark>APROVADO</mark>";
            }
        ?>
    </body>
</html>