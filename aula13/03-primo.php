<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Primo</title>
    </head>
    <body>
        <?php
            $n = isset($_GET["num"]) ? $_GET["num"] : 2;
            $primo = 0;
            for($c=1; $c<=$n; $c++){
                if($n%$c==0){
                    $primo++; 
                }
            }

            if($primo==2){
                echo "É PRIMO!";
            }
            else{
                echo "NÃO É PRIMO!";
            }
        ?>

        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </body>
</html>