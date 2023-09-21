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

                //adicionar elemento no final do vetor
                
                //array_push($v, "O");
                $v[] = "O";

                print_r($v);

                //excluir elemento no final do vetor
                array_pop($v);

                print_r($v);

                //adicionar elemento no inicio do vetor
                array_unshift($v, "Z");

                print_r($v);

                //excluir elemento no inicio do vetor
                array_shift($v);

                print_r($v);
            ?>
        </pre>    
    </body>
</html>