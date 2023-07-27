<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funções Aritméticas</title>
    </head>
    <body>
        <?php
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];

            echo "<h2>Valores Recebidos: $v1 e $v2.</h2><br>";
            echo "O valor absoluto de $v2 é ". abs($v2). "<br>";
            echo "O valor de $v1 <sup>$v2</sup> é ". pow($v1, $v2). "<br>";
            echo "A raiz quadrada de $v1 é ". sqrt($v1). "<br>";
            echo "O valor arredondado de $v2 é ". round($v2). "<br>";
            echo "A parte inteira de $v2 é ". intval($v2). "<br>";
            echo "$v2 em moeda é R$". number_format($v2, 2, ".", ","). "<br>";

            //Funções Aritiméticas Pré-Existentes na Linguagem:
            //Valor Absoluto: abs(a)
            //Potência: pow(a,b)
            //Raiz Quadrada: sqrt(a)
            //Arredondameno: round(a)
                //ceil(a) arredonda pra cima
                //floor(a) arredonda pra baixo
            //Parte inteira de um numero real: intval(a) 
            //Formatação: number_format(a, qntd casas decimais, separador de decimal, separador de milhar)
        ?>
    </body>
</html>