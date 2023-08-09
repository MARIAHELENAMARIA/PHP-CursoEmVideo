<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabuada</title>
    </head>
    <body>
        <?php
            $n = isset($_GET["numero"]) ? $_GET["numero"] : 1;
            $c = 0;

            do{
                echo "$n X $c = ". $n*$c. "<br>";
                $c++;
            }while($c <= 10);
        
        ?>
    </body>
</html>