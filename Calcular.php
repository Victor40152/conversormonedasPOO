<?php 

require_once "Mulpeso.php";
require_once "Muldolar.php";



$objpeso = new Mulpeso();
$objdolar =new Muldolar();
$numero1=$_POST["txtnumero1"];


if (isset($_POST["btnpeso"])){

    $objpeso->setNumero1($numero1);
    
    echo $objpeso->pesos();

}
if (isset($_POST["btndolar"])){

   
    $objdolar->setNumero1($numero1);
    echo  $objdolar->dolares();

}





?>