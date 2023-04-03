<?php
function elimarmen($menor, $arr){
    $t = count($arr);
    for ($i=0;$i<$t;$i++) {
        if($arr[$i] < $menor){
            unset($arr[$i]);
        }
    }
    foreach ($arr as $valor) {
        echo $valor." ";
    }
}
?>