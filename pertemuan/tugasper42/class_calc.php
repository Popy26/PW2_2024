<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 */

class Calculator {
    private $bil1;
    private $bil2;

    public function __construct($bil1, $bil2) {
        $this->bil1 = $bil1;
        $this->bil2 = $bil2;
    }

    public function tambah() {
        return $this->bil1 + $this->bil2;
    }

    public function kurang() {
        return $this->bil1 - $this->bil2;
    }

    public function bagi() {
        if ($this->bil2 != 0) {
            return $this->bil1 / $this->bil2;
        } else {
            return "Tidak dapat melakukan pembagian, karena pembagi adalah 0.";
        }
    }

    public function kali() {
        return $this->bil1 * $this->bil2;
    }
}

// Buat object dan tampilkan masing-masing method
$calculator = new Calculator(80, 5);
echo "Pertambahan: " . $calculator->tambah() . "<br>";
echo "Pengurangan: " . $calculator->kurang() . "<br>";
echo "Pembagian: " . $calculator->bagi() . "<br>";
echo "Perkalian: " . $calculator->kali() . "<br>";
?>