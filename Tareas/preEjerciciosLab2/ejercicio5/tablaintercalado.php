<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="clases.css">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php
        $col = $_GET["col"];
        $fil = $_GET["fil"];
        for ($i=0; $i <$fil; $i++) {
            echo "<tr>";
            for ($j=0; $j < $col; $j++) {
                if ($i%3==0){
                    echo "<td class='bg-rojo'></td>";
                }
                elseif ($i%3==1){
                    echo "<td class='bg-amarillo'></td>";
                }
                elseif ($i%3==2){
                    echo "<td class='bg-verde'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

