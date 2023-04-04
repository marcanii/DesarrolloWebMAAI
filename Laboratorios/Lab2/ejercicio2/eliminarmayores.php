<?php
function elimarmen($mayor, $arr){
    $t = count($arr);
    for ($i=0;$i<$t;$i++) {
        if($arr[$i] > $mayor){
            unset($arr[$i]);
        }
    }
    foreach ($arr as $valor) {
        echo $valor." ";
    }
}
?>