<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tipos de Variáveis</title>
    </head>
    <body>
        <?php 
            $n = 4;
            $no = "Gustavo";
            $no2 = (String) "Gustavo";
            $no3 = (int) "Gustavo";
            $no4 = (int) "10Gustavo";
            $no5 = (int) "Gustavo10";

            echo $n;
            echo "<br>";

            echo $no;
            echo "<br>";
            echo $no2;
            echo "<br>";
            echo $no3;
            echo "<br>";
            echo $no4;
            echo "<br>";
            echo $no5;
            echo "<br>";

            $n = 4.5;
            echo $n;
            echo "<br>";

            $nome = "Maria Helena";
            $idade = 19;

            echo "Nome: ". $nome. "<br>Idade: ". $idade;
            echo "<br>";
            echo "$nome tem $idade anos."
        ?>
    </body>
</html>