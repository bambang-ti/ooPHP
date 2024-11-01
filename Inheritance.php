<?php

// Ini adalah latihan 4 yang membahas class inheritance/kelas turunan.

class Mobil {
  protected $merk;

  // Constructor untuk mengatur nilai properti saat objek dibuat
  public function __construct($merk)
  {
        $this->merk = $merk;
  }

  public function tampilkanInfo(){
    echo "Merk Mobil: $this->merk";
  }
} 

class MobilListrik extends Mobil {
  private $kapasitasBaterai;

  public function __construct($merk, $kapasitasBaterai)
  {
      parent::__construct($merk); //memanggil constructor class parent
      $this->kapasitasBaterai = $kapasitasBaterai;
  }

  public function tampilkanInfo()
  {
    echo "Merk Mobil Listrik: $this->merk, Kapasitas Baterai: $this->kapasitasBaterai kWh";
  }
}

// Membuat objek dari class Mobil
$mobilListrik = new MobilListrik("Tesla", 100);
$mobilListrik->tampilkanInfo();
?>