<?php 
class examen{
    var $n;
    var $cadena = '';
    var $a = 0;
    var $b = 0;
    var $c = 0;

    function __construct($n, $cadena, $a, $b, $c){
        $this->n = $n;
        $this->cadena = $cadena;
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function CalcularFibonacci(){
        $fibo = array(0, 1);

        for ($i=2; $i < $this->n; $i++) { 
            $fibo[$i] = $fibo[$i-1] + $fibo[$i-2];
        }
        echo 'Fibonacci de '.$this->n.' elementos: <br>';
        for ($i=0; $i < $this->n; $i++) {
            echo $fibo[$i].' ';
        }
    }

    public function CalcularMayor(){
        if ($this->a > $this->b and $this->a > $this->c){
            echo 'Mayor: '.$this->a;
        }
        if ($this->b>$this->a and $this->b>$this->c) {
            echo 'Mayor: '.$this->b;
        }
        if ($this->c>$this->a and $this->c>$this->b) {
            echo 'Mayor: '.$this->c;
        }
    }

    public function Piramide(){
        $longitud = $longitud = strlen($this->cadena);
        
        if ($longitud % 2 == 0) { # Si la longitud de la cadena es par
            $subcadena = $this->cadena;
            for ($i = 0; $i < $longitud; $i++){  
                echo $subcadena;
                $subcadena = substr($subcadena, 1, -1); # Excluir la primera y última letra
                echo "<br>";
            }
            echo $letraDelMedio = substr($this->cadena, ($longitud / 2)-1, 1);
        } 
        else{
            $subcadena = $this->cadena;
            for ($i = 0; $i < $longitud; $i++){  
                echo $subcadena;
                $subcadena = substr($subcadena, 1, -1); # Excluir la primera y última letra
                echo '<br>';
            }
        }
    }
}
?>