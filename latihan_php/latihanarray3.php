<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $m1 = ['nim' => '01111111', 'nama' => 'Andi Setyo', 'nilai' => 95];
    $m2 = ['nim' => '01111112', 'nama' => 'Andi Setyo', 'nilai' => 80];
    $m3 = ['nim' => '01111113', 'nama' => 'Andi Setyo', 'nilai' => 89];
    $m4 = ['nim' => '01111114', 'nama' => 'Andi Setyo', 'nilai' => 70];
    $m5 = ['nim' => '01111115', 'nama' => 'Andi Setyo', 'nilai' => 75];
    $m6 = ['nim' => '01111116', 'nama' => 'Andi Setyo', 'nilai' => 89];
    $m7 = ['nim' => '01111117', 'nama' => 'Andi Setyo', 'nilai' => 84];
    $m8 = ['nim' => '01111118', 'nama' => 'Andi Setyo', 'nilai' => 83];
    $m9 = ['nim' => '01111119', 'nama' => 'Andi Setyo', 'nilai' => 77];
    $m10 = ['nim' => '01111110', 'nama' => 'Andi Setyo', 'nilai' => 87];
    $ar_judul = ['No', 'NIM', 'Nama Mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
    $mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];
    ?>
    <h3>
        <table border="1" cellpadding="2" width="100%">
            <thead>
                <tr>
                    <?php
                    foreach ($ar_judul as $judul) {
                    ?>
                        <th><?= $judul ?></th>
                    <?php } ?>
                </tr>
            </thead>
        </table>
    </h3>
</body>

</html>