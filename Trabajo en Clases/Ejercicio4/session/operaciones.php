<?php
class Operaciones{
    private $a;
    private $b;

    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
    }

    function sumar(){
        return $this->a + $this->b;
    }
    public function restar(){
        return $this->a - $this->b;
    }
    public function multiplicar(){
        return $this->a * $this->b;
    }
    public function dividir(){
        return $this->a / $this->b;
    }
}
?>