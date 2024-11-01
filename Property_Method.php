<?php

// Ini adalah latihan 2 yang membahas property dan method, juga ada constructor

class Mobil {
  // Properti
  private $merk;
  private $warna;

  // Constructor untuk mengatur nilai properti saat objek dibuat
  public function __construct($merk, $warna)
  {
    $this->merk = $merk;
    $this->warna = $warna;
  }

  // Method untuk menampilkan informasi mobil
  public function tampilkanInfo(){
    echo "Merk Mobil: $this->merk, Warna: $this->warna";
  }

  // Method untuk mendapatkan merk
  public function getMerk(){
    return $this->merk;
  }

  // Method untuk mengubah warna
  public function setWarna($warna){
    $this->warna = $warna;
  }

} 


// Membuat objek dari class Mobil
$mobil1 = new Mobil("Toyota", "Merah"); // Membuat objek baru dari class Mobil
$mobil1->tampilkanInfo(); // Memanggil method tampilkanInfo
echo $mobil1->getMerk();
?>