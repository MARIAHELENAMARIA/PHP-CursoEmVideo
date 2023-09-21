<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>for each</title>
    </head>
    <body>
        <pre>
            
            <?php
                $v = array( 0=>5,
                            3=>9,
                            2=>8,
                            1=>7
                );

                $v[] = 10;

                print_r($v);
                
                unset($v[2]);
                
                print_r($v);
            ?>
        </pre>
    </body>
</html>