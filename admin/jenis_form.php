<?php
$obJenis = new jenis_produk();
$rs = $obJenis->dataJenis();
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="jenis_controller.php" method="POST">
  <a align="center">Isi Nama Jenis Produk</a>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label>
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control" placeholder="isi nama jenis produk">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="simpan" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>