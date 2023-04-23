<style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid #000;
            width: 50px;
            height: auto;
            padding: 10px;
            word-wrap: break-word;
        }
</style>

<?php
class examen{
    private $cadena1;
    private $cadena2;

    public function __construct($cadena1, $cadena2){
        $this->cadena1 = $cadena1;
        $this->cadena2 = $cadena2;
    }

    public function cruzar(){
        $aux=0;
        $cont=0;
        $letra = '';
        $t1 = strlen($this->cadena1);
        $t2 = strlen($this->cadena2);
        echo '<table> <tr>';
        for ($i=0; $i < $t1; $i++) {
            for ($j=0; $j < $t2; $j++) { 
                if ($this->cadena1[$i]==$this->cadena2[$j]) {
                    $aux = 1;
                    $cont++;
                    break;
                }else{
                    $aux = 0;
                }
            }
            if ($aux==1 and $cont==1) {
                $letra = $this->cadena2;
            }
            else {
                $letra = $this->cadena1[$i];
            }
            echo '<td>'.$letra.'</td>';
        }
        echo '</tr></table>';
    }
}
?>