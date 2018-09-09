<?php
include 'func.php';

/*
    https://github.com/nhk46/targetsms
    BY:= NHK-46
*/

$init = new Bom();

//Eksekusi Call/Sms Boomber (Limit 3x/Jam)

echo " Masukkan No Target 62xxx \n Input : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
$init->type = 2; //Type 2 untuk telpon, Type 1 untuk sms
//$init->no = "08xxx"; //Nomer Hp tujuan

if ($init->type == 1) {
	for ($i=0; $i < 2; $i++) { 
	    $init->Verif($init->no,$init->type);
	}
}elseif ($init->type == 2) {
	 $init->Verif($init->no,$init->type);
}
