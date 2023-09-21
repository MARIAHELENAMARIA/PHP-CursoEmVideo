<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>String</title>
    </head>
    <body>
        <?php
            $p = "Leitte";
            $pr = 4.5;

            //echo "O $p custa R$". number_format($pr, 2);

            printf ("O %s custa R$ %.2f", $p, $pr);

            /*
                %d = decimal
                %u = decimal apenas positivo
                %s = string
                %f = float
            */ 
        ?>
    </body>
</html>