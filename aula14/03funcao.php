<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Função</title>
    </head>
    <body>
        <?php
            function soma(){
                $p = func_get_args();
                $total = func_num_args();

                $s = 0;

                for($i=0; $i<$total; $i++){
                    $s += $p[$i];
                }

                return $s;
            }
            
            $r = soma(3, 5, 2);
            echo "A soma dos valores é $r";
        ?>
    </body>
</html>