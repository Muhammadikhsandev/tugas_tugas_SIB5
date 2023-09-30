<?php
require 'suhu.php';

$dataKonversiSuhu1 = new KonversiSuhu ('Celcius', 25, 'Fahrenheit');
$dataKonversiSuhu2 = new KonversiSuhu ('Fahrenheit', 77, 'Celcius');
$dataKonversiSuhu3 = new KonversiSuhu ('Celcius', 25, 'Rheamur');
$dataKonversiSuhu4 = new KonversiSuhu ('Rheamur', 20, 'Celcius');

$dataKonversiSuhu5 = new KonversiSuhu ('Celcius', 30, 'Fahrenheit');
$dataKonversiSuhu6 = new KonversiSuhu ('Fahrenheit', 86, 'Celcius');
$dataKonversiSuhu7 = new KonversiSuhu ('Celcius', 30, 'Rheamur');
$dataKonversiSuhu8 = new KonversiSuhu ('Rheamur', 24, 'Celcius');

// Panggil fungsi cetak untuk seluruh objek
$dataKonversiSuhu1->cetak();
$dataKonversiSuhu2->cetak();
$dataKonversiSuhu3->cetak();
$dataKonversiSuhu4->cetak();

$dataKonversiSuhu5->cetak();
$dataKonversiSuhu6->cetak();
$dataKonversiSuhu7->cetak();
$dataKonversiSuhu8->cetak();
?>
