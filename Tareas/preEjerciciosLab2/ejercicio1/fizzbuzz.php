<?php
function FizzBuzz($n){
    if ($n%3==0 and $n%5==0) {
        echo "FizzBuzz";
    }
    elseif ($n%5==0) {
        echo "Buzz";
    }
    elseif ($n%3==0) {
        echo "Fizz";
    }
    else {
        echo "No es divisible con ninguno...";
    }
}
?>