<?php

// Ini adalah latihan 1 yang membahas class dan object

class Mobil {
  // Properti
  public $merk;
  public $warna;
  
  // Method untuk menampilkan informasi mobil
  public function tampilkanInfo(){
    echo "Merk Mobil: $this->merk, Warna: $this->warna";
  }
} 

// Membuat objek dari class Mobil
$mobil1 = new Mobil(); // Membuat objek baru dari class Mobil
$mobil1->merk = "Toyota"; // Mengatur properti 'merk'
$mobil1->warna = "Merah"; // Mengatur properti 'warna'
$mobil1->tampilkanInfo(); // Memanggil method tampilkanInfo
?>