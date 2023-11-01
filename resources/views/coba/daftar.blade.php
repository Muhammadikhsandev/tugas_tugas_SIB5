@php
$no = 1;

$s1 = ['nama' => 'fawwaz', 'nilai' => 85];
$s2 = ['nama' => 'jamal', 'nilai' => 95];
$s3 = ['nama' => 'asep', 'nilai' => 5]; // Ubah nilai $s3 ke 5
$s4 = ['nama' => 'abdul', 'nilai' => 65];
$s5 = ['nama' => 'surisno', 'nilai' => 55];

$judul = ['No', 'Nama', 'Nilai', 'Keterangan'];

$siswa = [$s1, $s2, $s3, $s4, $s5];
@endphp

<table border="1" align="center" cellpadding="10"> <!-- Perbaiki atribut dari cellpading ke cellpadding -->
    <thead>
        <tr>
            @foreach($judul as $jdl)
            <th>{{$jdl}}</th> 
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $s)
        @php
        $ket = ($s['nilai'] >= 60) ? 'Lulus' : 'Gagal'; // Ubah operator dari ? ke >=
        @endphp
        <tr>
            <td>{{$no++}}</td>
            <td>{{$s['nama']}}</td>
            <td>{{$s['nilai']}}</td>
            <td>{{$ket}}</td>
        </tr>
        @endforeach
    </tbody>
</table>