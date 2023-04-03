<?php
$col = $_GET["col"];
$fil = $_GET["fil"];
?>

<table style="border-collapse:collapse;">
    <?php
    for ($i=0; $i<=$fil;$i++){
        echo "<tr>";
        for ($j=0;$j<=$col;$j++){
            if ($j==0 and $i==0) {
                echo "<th style='background:#a39b9b;border: 1px solid black;padding:8px;'>".' '."</th>";
            }
            elseif ($j==0 and $i!=0){
                echo "<th style='background:#a39b9b;border: 1px solid black;padding:8px;'>".$i."</th>";
            }
            elseif ($j!=0 and $i==0){
                echo "<th style='background:#a39b9b;border: 1px solid black;padding:8px;'>".$j."</th>";
            }
            else {
                echo "<td style='border: 1px solid black;padding:8px;'>".$j*$i."</td>";
            }
        }
        echo "</tr>";
    }

    ?>
</table>
