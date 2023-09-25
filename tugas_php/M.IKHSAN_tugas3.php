<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>

<body>

    <?php
    $m1 = ['NIM' => '202030401', 'Nama' => 'Andi', 'Nilai' => 55];
    $m2 = ['NIM' => '20203042', 'Nama' => 'Ani', 'Nilai' => 95];
    $m3 = ['NIM' => '20203043', 'Nama' => 'Ari', 'Nilai' => 50];
    $m4 = ['NIM' => '20203044', 'Nama' => 'Aji', 'Nilai' => 50];
    $m5 = ['NIM' => '20203045', 'Nama' => 'Arip', 'Nilai' => 90];
    $m6 = ['NIM' => '20203046', 'Nama' => 'Rahman', 'Nilai' => 75];
    $m7 = ['NIM' => '20203047', 'Nama' => 'Budi', 'Nilai' => 30];
    $m8 = ['NIM' => '20203048', 'Nama' => 'Arya', 'Nilai' => 85];
    $m9 = ['NIM' => '20203049', 'Nama' => 'Fadly', 'Nilai' => 80];
    $m10 = ['NIM' => '202030410', 'Nama' => 'Agus', 'Nilai' => 60];

    $mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];
    $ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];


    $jumlah_data = count($mahasiswa);
    $jml_nilai = array_column($mahasiswa, 'Nilai');
    $rata_nilai = array_sum($jml_nilai);

    $max_ni = max($jml_nilai);
    $min_ni = min($jml_nilai);
    $rata_ni = $rata_nilai / $jumlah_data;
    $jumlah_nilai = array_sum($jml_nilai);


    $nilai = [
        'Jumlah Mahasiswa' => $jumlah_data,
        'Nilai Tertingi' => $max_ni,
        'Nilai Terendah' => $min_ni,
        'Nilai Rata-rata' => $rata_ni,
        'Jumlah Keseluruhan Nilai' => $jumlah_nilai
    ]

    ?>

    <table border="1" cellpadding="2" width="100%">
        <thead>
            <h3>
                <tr>
                    <?php
                    foreach ($ar_judul as $judul) {
                    ?>

                        <th>
                            <?= $judul ?>
                        </th>

                    <?php } ?>
                </tr>
            </h3>

        </thead>
        <tbody>

            <?php
            $no = 1;
            foreach ($mahasiswa as $mhs) {

                $ket = ($mhs['Nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';

                // grade
                if ($mhs['Nilai'] >= 85 && $mhs['Nilai'] <= 100) $grade = 'A';
                else if ($mhs['Nilai'] >= 75 && $mhs['Nilai'] <= 80) $grade = 'B';
                else if ($mhs['Nilai'] >= 60 && $mhs['Nilai'] <= 74) $grade = 'C';
                else if ($mhs['Nilai'] >= 30 && $mhs['Nilai'] <= 59) $grade = 'D';
                else if ($mhs['Nilai'] >= 0 && $mhs['Nilai'] <= 29) $grade = 'E';
                else $grade = '';

                // Predikat Nilai
                switch ($grade) {
                    case "A":
                        $predikat = "Memuaskan";
                        break;
                    case "B":
                        $predikat = "Bagus";
                        break;
                    case "C":
                        $predikat = "Cukup";
                        break;
                    case "D":
                        $predikat = "Kurang";
                        break;
                    case "E":
                        $predikat = "Buruk";
                        break;
                    default:
                        $predikat = "";
                }
            ?>

                <tr align="center">
                    <td><?= $no ?></td>
                    <td><?= $mhs['NIM'] ?></td>
                    <td><?= $mhs['Nama'] ?></td>
                    <td><?= $mhs['Nilai'] ?></td>
                    <td><?= $ket ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>

            <?php $no++;
            } ?>
        </tbody>

        <tfoot>
            <?php
            foreach ($nilai as $ni => $hasil) {
            ?>

                <h3>
                    <tr align="center">
                        <td colspan="3"><?= $ni ?></td>
                        <td colspan="4"><?= $hasil ?></td>
                    </tr>
                </h3>
        </tfoot>

    <?php } ?>
    </table>
</body>

</html>