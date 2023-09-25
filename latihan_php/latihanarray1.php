<?php
$ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu'];
$ar_buah[] = 'Naga';
$ar_buah[] = 'Durian';


echo '<br>cetak data array menggunakan looping foreach';
foreach ($ar_buah as $id => $buah) {
    echo '<br> Key array buah :' . $id;
}
foreach ($ar_buah as $buah) {
    echo '<br/>Buah: ' . $buah;
}

foreach($ar_buah as $id => $buah){
    echo '<br/>Buah dengan id: '.$id.' adalah buah '.$buah;
}
