<?php
  class Car {
    // property
    public $brand;
    public $color;

    // method

    function getBrand(){
        return $this->brand;
    }

  }

  

  //object
  $rubicon = new Car();
  $tesla = new Car();

  //setter
    $rubicon->brand = "rubicon";
    $tesla->brand = "tesla";
   

   //echo
   echo $rubicon->getBrand();
  echo '<br><br>';
  echo $tesla->getBrand ();


?>