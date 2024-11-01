<?php
require 'Gempa.php';

// membuat objek
$g1 = new Gempa('Banten', 0.1);
$g2 = new Gempa('Tokyo', 3.5);
$g3 = new Gempa('Florida', 5.1);
$g4 = new Gempa('Tel Aviv', 9.5);

// panggil method
$g1->cetak(); $g2->cetak();
$g3->cetak(); $g4->cetak();

?>