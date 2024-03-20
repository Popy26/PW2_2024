<?php 
    require_once 'class_kendaraan.php';

    //object
    $motor = new motor('MOtor', 'Bensin', 2);
    $submarine = new Submarine('submarine', 'solar', 1000);

    //echo motor
    echo 'info motor:<br>';
    $motor->getInfoMotor();
    echo '<br>';

     //echo motor
     echo 'info kapal selam:<br>';
     $submarine->getInfoSubmarine();
     echo '<br>';
?>