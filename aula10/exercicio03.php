<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicio 3</title>
    </head>
    <body>
        <?php
            $uf = isset($_GET["estado"]) ? $_GET["estado"] : "";

            switch($uf){
                //região nordeste
                case "MA":
                case "PI":
                case "CE":
                case "RN":
                case "PB":
                case "PE":
                case "AL":
                case "SE":
                case "BA":
                    echo "Região Nordeste";
                    break;
                
                //regiao norte 
                case "AM":
                case "PA":
                case "AC":
                case "RO":
                case "TO":
                case "RR":
                case "AP": 
                    echo "Região Norte";
                    break;
                
                //região sudeste
                case "SP":
                case "RJ":
                case "ES":
                case "MG":
                    echo "Região Sudeste";
                    break;

                //regiao centro-oeste
                case "MT":
                case "MS":
                case "GO":
                case "DF":
                    echo "Região Centro-Oeste";
                    break; 

                //regiao sul
                case "PR":
                case "SC":
                case "RS":
                    echo "Região Sul";
                    break;
                default:
                    echo "Estado Inválido.";    
            }
        ?>

        <br>
        <a href="exercicio03.html"></a>
    </body>
</html>