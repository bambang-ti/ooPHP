<?php

// Ini adalah latihan 5 yang membahas class abstract

// Abstract class
abstract class Kendaraan {
    protected $merk;

    public function __construct($merk) {
        $this->merk = $merk;
    }

    // Abstract method
    abstract public function tampilkanInfo();
}

class Motor extends Kendaraan {
    public function tampilkanInfo() {
        echo "Merk Motor: $this->merk";
    }
}

$motor = new Motor("Yamaha");
$motor->tampilkanInfo(); // Output: Merk Motor: Yamaha
?>
