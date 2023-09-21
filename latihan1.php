
<?php
//komentar
// echo 'hello word';

// latihan membuat variable
$namaSiswa = "Budi Santoso"; //tipe data string
$umur = 20; //tipe data integer
$berat_badan = 30.5; //tipe data float
$_pekerjaan = 'Mahasiswa'; 

//variable constanta
$jari2 =15;
define ('PHI', 3.14);
$luas = PHI *$jari2 * $jari2;

echo 'Nama Siswa: '.$namaSiswa;
echo '<br/>Umur: '.$umur.' tahun';
echo '<br/>Berat Badan: '.$berat_badan;
echo '<br/>Pekerjaan: '.$_pekerjaan;
echo "<br/>Berat Badan 2: $berat_badan kg";
echo '<br/>Berat Badan 3: $berat_badan kg';
print '<br/>Pekerjaan 2: '.$_pekerjaan;
echo '<hr/>Luas lingkaran dengan jari-jari '.$jari2.' = '.$luas;


// contoh contoh panggilan variable didalam php
?>
<hr>
<br>Nama Siswa 1: <?= $namaSiswa ?>
<br />Nama Siswa 2: <?= $namaSiswa.' '.$_pekerjaan ?>
<br />Umur: <?= $umur + $berat_badan ?> tahun
<br />Berat Badan : <?= $berat_badan; ?> kg
<br />Pekerjaan: <?= $_pekerjaan; ?>
<br />Luas lingkaran jari2 <?= $luas; ?>
