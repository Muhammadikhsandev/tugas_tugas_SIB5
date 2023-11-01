@php
$nama = "Budi";
$nilai = 59.00;
@endphp

@if ($nilai >= 60) @php $ket = "lulus"; @endphp
@else @php $ket = "gagal"; @endphp
@endif

Siswwa {{ $nama }} dengan nilai {{ $nilai }} dinyatakan {{ $ket }}