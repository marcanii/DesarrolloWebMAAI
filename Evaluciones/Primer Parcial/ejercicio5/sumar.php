<?php
$resultado = array();
function sumarvec($a, $b,$n){
    for ($i=0; $i < $n; $i++) { 
        $resultado[$i] = $a[$i] + $b[$i];
    }
    return $resultado;
}
?>