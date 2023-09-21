<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>print_r</title>
    </head>
    <body>
        <?php
            $v[0] = 4;
            $v[1] = 2;
            $v[2] = 1;

            print_r($v);

            echo("<br>");

            $v2 = array (3, 7, 6, 2, 1, 9); 
            print_r($v2);

            echo("<br>");

            var_dump($v2);

            echo("<br>");

            var_export($v2);

            echo("<br>");
        ?>
    </body>
</html>