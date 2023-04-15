<?php
class estante{
    private $fila1;
    private $fila2;
    private $fila3;

    private $tope1, $tope2, $tope3;
    private $a=0,$b=0,$c=0;

    public function __construct($tope1, $tope2, $tope3){
        $this->$tope1 = $tope1;
        $this->$tope2 = $tope2;
        $this->$tope3 = $tope3;
        $this->fila1 = array();
        $this->fila2 = array();
        $this->fila3 = array();
    }

    public function insertarLibro($fila){
        if ($fila == 1) {
            $t = 0;
            echo $this->tope1;
            if ($t < $this->tope1) {
                array_push($this->fila1, $this->a++);
                echo 'Se agrego correctamente a la fila 1';
                $t++;
            }else{
                echo 'La fila 1 esta llena';
            }
        }elseif ($fila == 2) {
            $t = 0;
            if ($t < $this->tope2) {
                array_push($this->fila2, $this->b++);
                echo 'Se agrego correctamente a la fila 2';
            }else{
                echo 'La fila 2 esta llena';
            }
        }elseif ($fila == 3) {
            $t = count($this->fila3);
            if ($t < $this->tope3) {
                array_push($this->fila3, $this->c++);
                echo 'Se agrego correctamente a la fila 3';
            }else{
                echo 'La fila 3 esta llena';
            }
        }
        else {
            echo 'Fila '.$fila.' no existe';
        }
    }
    
    public function mostrarFila($fila){
        if ($fila == 1) {
            for ($a=0; $a < sizeof($this->fila1); $a++) { 
                echo $this->fila1[$a].' ';
            }
        }elseif ($fila == 2) {
            for ($a=0; $a < sizeof($this->fila2); $a++) { 
                echo $this->fila2[$a].' ';
            }
        }elseif ($fila == 3) {
            for ($a=0; $a < sizeof($this->fila3); $a++) { 
                echo $this->fila3[$a].' ';
            }
        }
        else {
            echo 'Fila '.$fila.' no existe';
        }
    }
}
?>