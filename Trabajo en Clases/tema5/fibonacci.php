<?php
$n=$_GET['n'];
$f=0;
$f1=1;
$f2=1;

if ($n==0 or $n == 1 or $n == 2) {
    $f2 = 1;
} else {
    for ($i=2;$i<$n;$i++) {
    $f=$f1+$f2;
    // echo "$f ";
    $f1=$f2;
    $f2=$f;
    }
}

echo $f2;
?>
