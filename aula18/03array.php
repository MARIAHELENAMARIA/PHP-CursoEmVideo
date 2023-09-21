<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>for each</title>
    </head>
    <body>
        <pre>
            <table style="border: 1px solid black">
                <tr>
                    <?php
                        $c = range(5, 20, 2);
                        foreach($c as $v){
                            echo "<td style='border: 1px solid black'> $v </td>";
                        }
                    ?>
                </tr>
            </table>
        </pre>
    </body>
</html>