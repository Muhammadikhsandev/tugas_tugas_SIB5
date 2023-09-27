<?php
// contoh fungsi bawaan dari PHP
$str = 'Belajar PHP dikampus merdeka';
echo $str;

$str = strtoupper($str);
echo '<br>'.$str;

$str = strtolower($str);
echo '<br>'.$str;
$str = ucfirst($str);
echo '<br/>'.$str;
$str = ucwords($str);
echo '<br/>'.$str;


$ar_buah = ['pepaya', 'jambu', 'mangga', 'pisang', 'apel'];
sort($ar_buah); // mengurutkan atau memilah abjad
foreach($ar_buah as $buah){
    echo '<br>'.$buah;
}

echo '<hr>';
arsort($ar_buah); // mengurutkan atau memilah dari Z - A
foreach($ar_buah as $buah){
    echo'<br>'.$buah;
}

?>