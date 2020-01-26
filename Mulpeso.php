<?php
require_once "Conversion.php";



class Mulpeso extends Conversion{

public function pesos(){
    return ($this->getNumero1()* 0.00030 );
}



}




?>