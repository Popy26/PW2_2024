<?php
    class Vehicle {
				// Property
        protected $type;
        protected $fuel;
        

        protected function __construct($type, $fuel, $wheels){

            $this->type = $type; 
            $this->fuel = $fuel;
            

        }

        protected function getinfo() {
            echo "jenis kendaraan: " . $this->type . "<br>";
            echo "jenis bahan bakar: " . $this->fuel . "<br>";
           
        }

        // code..
    }

    class motor extends vehicle {
        public $wheels;

        public function __construct($type, $fuel, $wheels){
            parent::__construct($type, $fuel, $wheels);
            $this->wheels = $wheels;
        }
    
        public function getInfoMotor(){
            parent::getInfo();
            echo "jumlah roda: " . $this->wheels . "<br>";
        }   
    }

    class Submarine extends vehicle {
        public $max_depth;

        public function __construct($type, $fuel, $max_depth)
        {
            parent::__construct($type, $fuel, $max_depth);
            $this->max_depth = $max_depth;
        }
    
        public function getInfoSubmarine(){
            parent::getInfo();
            echo "kedalaman maxsimal: " . $this->max_depth . "<br>";
        }   
    }
?>