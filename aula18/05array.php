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
                $v = array( "nome" => "Ana",
                            "idade" => 23,
                            "peso" => 65.5
                );

                print_r($v);

                foreach($v as $campo => $valor){
                    echo "O valor de $campo é $valor.";
                }
            ?>
        </pre>
    </body>
</html>