<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>vetor</title>
    </head>
    <body>
        <pre>
            <?php
                $v = array("a", "j", "m", "x", "k");
                
                print_r($v);

                sort($v);

                print_r($v);

                rsort($v);

                print_r($v);

                asort($v);

                print_r($v);

                arsort($v);

                print_r($v);

                ksort($v);

                print_r($v);

                krsort($v);

                print_r($v);
            ?>
        </pre>    
    </body>
</html>