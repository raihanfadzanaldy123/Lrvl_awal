<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Data Tabungan Perorangan</center> <br>
    Nama        : {{ $tabungan->nama}}  <br>
    Nis         : {{ $tabungan->nis}}   <br>
    Kelas       : {{ $tabungan->kelas}} <br>
    Jumlah      : {{ $tabungan->jmlh}}  <br>

    @if($tabungan->jmlh > 25000)
        Paket Tabungan : A
    @elseif($tabungan->jlmh > 10000)
        Paket Tabungan : B
    @else
        Paket Tabungan : NULL
        @endif

</body>
</html>
