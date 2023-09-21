<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exibir</title>
    </head>
    <body>
        <pre>
            <?php
                $v = array("a", "j", "m", "x", "k");
                
                echo "O vetor tem ". count($v). " elementos.<br>";
                
                print_r($v);
                //var_dump($v);
            ?>
        </pre>    
    </body>
</html>