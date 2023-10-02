<?php
require_once 'Hewan1.php';
require_once 'Hewan2.php';
require_once 'Hewan3.php';
$h1 = new kucing();
$h2 = new kambing();
$h3 = new Anjing();

$suara_hewan = [$h1,$h2,$h3];

foreach ($suara_hewan as $hewan){
    echo '<br>'.$hewan->bersuara();
}

?>