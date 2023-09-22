<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>form input penilaian</h1>
    <form method="POST">
        <table border="0">
            <tr>
                <td><label for="">Nama : </label></td>
                <td><input type="text" name="nama" placeholder="Masukan nama"><br />
                </td>
            </tr>
            <tr>
                <td><label for=""> Pekerjaan</label></td>
                <td>
                    <select name="pekerjaan" id="">
                        <option value="">---Pilihan Pekerjaan---</option>
                        <option value="Dokter">Dokter</option>
                        <option value="Pilot">Pilot</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="wirausaha">Wirausaha</option>
                        <option value="Pegawai">Pegawai</option>
                        <option value="TNI">TNI</option>
                        <option value="POLRI">POLRI</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Rsitek">Arsitek</option>
                        <option value="Pemadam Kebakaran">Pemadam Kebakaran</option>
                    </select><br />
                </td>
            </tr>


            <tr>
                <td>Hobby</td>
            </tr>
            <tr>
                <td><input type="radio" name="hobby" value="Memancing" checked />Memancing</td>
            </tr>
            <tr>
                <td><input type="radio" name="hobby" value="Memasak" />Memasak</td>
            </tr>
            <tr>
                <td><input type="radio" name="hobby" value="Menulis" />Menulis</td>
            </tr>
            <tr>
                <td><input type="radio" name="hobby" value="Menggambar" />Menggambar</td>
            </tr>
            <tr>
                <td><input type="radio" name="hobby" value="Fotografi" />Fotografi</td>
            </tr>
            <tr>
                <td><input type="radio" name="hobby" value="Berkebun" checked />Berkebun</td>
            </tr>
            <tr>
                <td><input type="radio" name="hobby" value="Olahraga" />Olahraga</td>
            </tr>
            <tr>
                <td><input type="radio" name="hobby" value="Menyanyi" />Menyanyi</td>
            </tr>
            <tr>
                <td><input type="radio" name="hobby" value="Menari" />Menari</td>
            </tr>
            <tr>
                <td><input type="radio" name="hobby" value="Traveling" />Traveling</td>
            </tr>
            <tr>
                <td><button name="simpan" type="submit">Simpan </button></td>
            </tr>

        </table><br>



    </form>

    <?php
    //deklarasi & inisialisasi variabel
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $hobby = $_POST['hobby'];
    $tombol = $_POST['simpan'];

    if (isset($tombol)) {

    ?>
        <h2>Nama : <?= $nama ?></h2>
        <h2><br />Pekerjaan: <?= $pekerjaan ?></h2>
        <h2><br />Hobby : <?= $hobby ?></h2>
    <?php } ?>
</body>

</html>