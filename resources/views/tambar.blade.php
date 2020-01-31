<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h3>Data Barang</h3></center>
    @foreach ($barangx as $item)
    Kode Barang     : {{ $item->kd_barang }} <br>
    Nama Barang     : {{ $item->nm_barang }} <br>
    Kategori        : {{ $item->kategori }}  <br>
    Harga Beli      : {{ $item->hrg_beli }}  <br>
    Harga Jual      : {{ $item->hrg_jual }}  <br>
    Stok Barang     : {{ $item->kategori }}  <br>
    <hr>
    @endforeach

</body>
</html>
