<?php

// Ini adalah latihan 3 yang membahas property constanta/const dan static

class Mobil {
  const VERSI = "1.0"; // Constant
  private static $jumlahMobil = 0; // Static property

  // Constructor untuk mengatur nilai properti saat objek dibuat
  public function __construct()
  {
      self::$jumlahMobil++; // Akses ke static property    
  }

  public static function getJumlahMobil(){
    return self::$jumlahMobil;
  }
} 


// Membuat objek dari class Mobil
echo "Versi Mobil: ".Mobil::VERSI . "<br/>";
$mobil1 = new Mobil();
$mobil2 = new Mobil();
$mobil3 = new Mobil();
$mobil4 = new Mobil();
$mobil5 = new Mobil();
echo "Jumlah Mobil: ". Mobil::getJumlahMobil();
// $mobil1 = new Mobil("Toyota", "Merah"); // Membuat objek baru dari class Mobil
?>