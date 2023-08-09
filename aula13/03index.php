<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Primo</title>
    </head>
    <body>
        <form method="get" action="03-primo.php">
            <select name="num">
                <?php
                    for($i=1; $i <=10; $i++){
                        echo "<option>$i</option>";
                    }
                ?>
            </select>
            <br>
            <input type="submit" value="Primo">
        </form>
    </body>
</html>