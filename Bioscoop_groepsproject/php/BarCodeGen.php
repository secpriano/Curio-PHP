<?php
require 'vendor/autoload.php';

//Geef GetBar met een nummer mee om dit naar barcode over te zetten
function GetBar($code){
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();
if(isset($code)){
return $generator->getBarcode($code, $generator::TYPE_CODE_128);
}
}

?>
