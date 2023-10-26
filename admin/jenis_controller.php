<?php


include_once 'koneksi.php';
include_once 'models/Jenis_produk.php';

//tangkap request
$nama = $_POST['nama'];

//simpan didalam data
$data = [
    $nama
];

//eksekusi program
$model = new jenis_produk();
$tombol = $_REQUEST['proses'];
switch ($tombol){
    case 'simpan' :$model->simpan($data); break;
    case 'ubah' : $data[] = $_POST['idx']; $model->ubah($data); break;
    default:
    header('Location:index.php?url=jenis_produk');
    break;
}
header('Location:index.php?url=jenis_produk');
