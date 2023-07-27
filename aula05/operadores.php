<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operadores</title>
    </head>
    <body>
        <?php 
            $n1 = 3;
            $n2 = 2;

            //Adição $r = $n1 + $n2;
            //Subtração $r = $n1 - $n2;
            //Multiplicação $r = $n1 * $n2;
            //Divisão $r = $n1 / $n2;
            //Resto da Divisão (módulo) $r = $n1 % $n2;

            echo "A soma entre $n1 e $n2 é: ". ($n1+$n2);
            echo "<br>";
            echo "A subtração entre $n1 e $n2 é: ". ($n1-$n2);
            echo "<br>";
            echo "A multiplicação entre $n1 e $n2 é: ". ($n1*$n2);
            echo "<br>";
            echo "A divisão entre $n1 e $n2 é: ". ($n1/$n2);
            echo "<br>";
            echo "O módulo entre $n1 e $n2 é: ". ($n1%$n2);
            echo "<br>";

            $m = $n1+$n2/2;
            echo "$m <br>";

            $m = ($n1+$n2)/2;
            echo "$m <br>";

            //http://127.0.0.1/aula05/operadores.php
            
            //passando valores pela url:
            //http://localhost/aula05/operadores.php?a=5&b=8
            //$n1=$_GET["a"];
            //$n2=$_GET["b"];

            $n1 = $_GET["a"];
            $n2 = $_GET["b"];

            echo "<h2>Valores Recebidos: $n1 e $n2.</h2>";

            echo "A soma entre $n1 e $n2 é: ". ($n1+$n2);
            echo "<br>";
            echo "A subtração entre $n1 e $n2 é: ". ($n1-$n2);
            echo "<br>";
            echo "A multiplicação entre $n1 e $n2 é: ". ($n1*$n2);
            echo "<br>";
            echo "A divisão $n1 e $n2 é: ". ($n1/$n2);
            echo "<br>";
            echo "O módulo entre $n1 e $n2 é: ". ($n1%$n2);
            echo "<br>";
            $m = ($n1+$n2)/2;
            echo "A média entre $n1 e $n2 é: $m <br>";
        ?>
    </body>
</html>