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
        <label for="">Nama : </label>
        <input type="text" name="nama" placeholder="Masukan nama">
        <label for=""> Mata Kuliah</label>
        <select name="matkul" id="">
            <option value="">---Pilian MataKuliah---</option>
            <option value="html">HTML dan CSS</option>
            <option value="js">Javascript</option>
            <option value="ui">UI/UX</option>
            <option value="php">PHP</option>
        </select>
        <label for="">Nilai</label>
        <input type="text" name="nilai" placeholder="Masukan Nilai">
        <button name="proses" type="submit">Simpan </button>

    </form>

    <?php
    //deklarasi & inisialisasi variabel
    $nama = $_POST['nama'];
    $matakuliah = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $tombol = $_POST['proses'];

    $ket = ($nilai >= 60) ? "Lulus" : "Gagal";
    //if multi kondisi
    if ($nilai >= 85 && $nilai <= 100) $grade = "A";
    else if ($nilai >= 75 && $nilai < 84) $grade = "B";
    else if ($nilai >= 60 && $nilai < 74) $grade = "C";
    else if ($nilai >= 30 && $$nilai < 59) $grade = "D";
    else if ($nilai >= 0 && $nilai < 29) $grade = "E";
    else $grade = "";
    //predikat dengan switch case
    switch ($grade) {
        case 'A':
            $predikat = "Memuaskan";
            break;
        case 'B':
            $predikat = "Bagus";
            break;
        case 'C':
            $predikat = "Cukup";
            break;
        case 'D':
            $predikat = "Kurang";
            break;
        case 'E':
            $predikat = "Buruk";
            break;
        default:
            $predikat = '';
    }
    if (isset($tombol)) {

    ?>
        <h1>Nama Siswa: <?= $nama ?></h1>
        <h2><br />Nilai: <?= $nilai ?></h2>
        <h2><br />MataKuliah : <?= $matakuliah ?></h2>
        <h2><br />Keterangan : <?= $ket ?></h2>
        <h2><br />Grade : <?= $grade ?></h2>
        <h2><br />Predikat: <?= $predikat ?></h2>

    <?php } ?>
</body>

</html>