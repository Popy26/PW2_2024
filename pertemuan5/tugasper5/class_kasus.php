<?php

class Baju{
    protected $brand;
    protected $bahan;
    protected $ukuran;
    protected $harga;

    public function __construct($brand, $bahan, $ukuran, $harga) {
        $this->brand = $brand;
        $this->bahan = $bahan;
        $this->ukuran = $ukuran;
        $this->harga = $harga;
    }

    public function getInfoBaju() {
        echo "brand Baju: " . $this->brand . "<br>";
        echo "bahan: " . $this->bahan . "<br>";
        echo "ukuran baju: " . $this->ukuran . "<br>";
        echo "Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
    }
}

class Baju extends gamis {
    public function getInfoBaju() 
    {
        parent::getInfoBaju();
        echo "Kategori: Fiksi<br>";
    }
}

class Baju extends koko {
    public function getInfoBaju() 
    {
        parent::getInfoBaju();
        echo "Kategori: Non-Fiksi<br>";
    }
}

?>