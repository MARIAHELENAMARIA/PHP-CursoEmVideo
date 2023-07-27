<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Situacao</title>
    </head>
    <body>
        <?php
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            
            $m = ($nota1+$nota2)/2;

            echo "A média entre as notas $nota1 e $nota2 é $m.<br>";

            $sit = ($m<6) ? "REPROVADO" : "APROVADO";

            echo "Situação do Aluno: $sit<br>";
        ?>
    </body>
</html>