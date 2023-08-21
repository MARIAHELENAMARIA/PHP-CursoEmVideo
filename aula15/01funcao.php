<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funcao</title>
    </head>
    <body>
        <?php
            /* function teste($x){
                $x += 2;
                echo "<p>O valor de X é $x</p>";
            }

            $a = 3;
            teste($a);
            echo "<p>O valor de A é $a</p>"; */
            
            function teste(&$x){
                $x += 2;
                echo "<p>O valor de X é $x</p>";
            }

            $a = 3;
            teste($a);
            echo "<p>O valor de A é $a</p>";
        ?>
    </body>
</html>