<?php
include 'bomphd.php';

/*
    https://github.com/nhk46/targetsms
    Made by NHK-46
    Modified by まやちゃん
*/

$init = new Bom();

//Eksekusi Sms Boomber
echo "  Contoh  628××××××××××\n\n [Nomor Target]: ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo " [Jumlah Misi]: ";
$b = trim(fgets(STDIN));
print("============================================================");
$loop = "$b";
for ($i=0; $i < $loop; $i++) {
    $init->Verif($init->no);
}
