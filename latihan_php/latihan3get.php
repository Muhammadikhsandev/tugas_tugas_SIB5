<form method="GET">
    <label for="">Nama</label> <br>
    <input type="text" name="nama" /><br />
    <label for="">Alamat</label> <br>
    <input type="text" name="alamat"><br />
    <input type="submit" name="proses" value="Simpan" id=""/>
</form>
<?php
//memproses form
$nama = $_GET ['nama'];
$alamat = $_GET ['alamat'];
//tampilkan setelah form selesai
$proses = $_GET['proses'];
if (isset($proses)){
    echo 'Nama : '.$nama. '<br>Alamat : '.$alamat;
}
?>