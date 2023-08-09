<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabuada</title>
    </head>
    <body>
        <form method="get" action="02-tabuada.php">
            <select name="num">
                <?php
                    for($i=1; $i <=10; $i++){
                        echo "<option>$i</option>";
                    }
                ?>
                <br>
                <input type="submit" value="Tabuada">
            </select>
        </form>    
    </body>
</html>