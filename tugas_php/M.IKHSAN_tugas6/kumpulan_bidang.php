<?php
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$lingkaran = new Lingkaran(10);
$persegiPanjang = new PersegiPanjang(20, 15);
$segitiga = new Segitiga(30, 40);


// Mencetak data dalam bentuk tabel
echo "<table border='1'>
<thead>
<tr>
    <th>No</th>
    <th>Nama Bidang</th>
    <th>Keterangan</th>
    <th>Luas Bidang</th>
    <th>Keliling Bidang</th>
</tr>
</thead>
<tbody>
<tr>
    <td>1</td>
    <td>{$lingkaran->namaBidang()}</td>
    <td>Jari-Jari: 10</td>
    <td>{$lingkaran->luasBidang()}</td>
    <td>{$lingkaran->kelilingBidang()}</td>
</tr>
<tr>
    <td>2</td>
    <td>{$persegiPanjang->namaBidang()}</td>
    <td>Panjang: {$persegiPanjang->Panjang()}, Lebar: {$persegiPanjang->Lebar()}</td>
    <td>{$persegiPanjang->luasBidang()}</td>
    <td>{$persegiPanjang->kelilingBidang()}</td>
</tr>
<tr>
    <td>3</td>
    <td>{$segitiga->namaBidang()}</td>
    <td>Alas: {$segitiga->Alas()}, Tinggi: {$segitiga->Tinggi()}</td>
    <td>{$segitiga->luasBidang()}</td>
    <td>{$segitiga->kelilingBidang()}</td>
</tr>
</tbody>
</table>";

