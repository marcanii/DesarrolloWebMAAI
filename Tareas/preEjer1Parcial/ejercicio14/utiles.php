<?php 
    class utiles{
        private $cadena;

        public function __construct($cadena){
            $this->cadena = $cadena;
        }

        public function aumentarguiones($n){
            $longitud = strlen($this->cadena);
            for ($i=0; $i < $longitud; $i++){ 
                for ($j=0; $j < $n; $j++){
                    if ($i!=0) {
                    echo '-';
                    }
                }
                echo $this->cadena[$i];
            }
        }
    }
?>