<?php
    function menor($a, $b, $c){
        if ($a <= $b && $a <= $c) {
            return $a;
        } elseif ($b <= $a && $b <= $c) {
            return $b;
        } else {
            return $c;
        }
    }

    function factorial($n){
        $factorial = 1;

        for ($i = 1; $i <= $n; $i++) {
            $factorial *= $i;
        }

        return $factorial;
    }

    function tablassumas($a, $b){
        echo "<table>";
        for ($i = $b; $i <=$b ; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $a; $j++) {
            echo "$j + $i = " . ($i + $j) . "<br>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
?>