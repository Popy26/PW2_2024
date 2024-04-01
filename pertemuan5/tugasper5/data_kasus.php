<?php

    require_once 'class_kasus.php';


$baju1 = new baju("Petualangan di Pulau Misteri", "Dr. Amanda Hartono", 2022 ,150000);
$baju2 = new baju("Rahasia Kode Enigma", "Prof. David Wijaya" , 2019 , 180000 );


echo "Informasi baju koko:<br>";
$baju1->getInfoBaju();
echo "<hr>"."<br>";

echo "Informasi gamis:<br>";
$baju2->getInfoBaju();

?>