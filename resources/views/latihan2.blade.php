<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Tabungan</center><br>

    @foreach ($tabungan as $data)
        Nama            : {{$data->nama}}   <br>
        Nis             : {{$data->nis}}    <br>
        Kelas           : {{$data->kelas}}  <br>

            @if ($data->jmlh >= 25000)
                Paket A <br>

            @elseif ($data->jmlh <= 11000)
                Paket B <br>

            @elseif ($data->jmlh >= 1000)
                Paket C <br>

            @else
                return "Paket NULL";

             @endif
        Jumlah Tabungan : {{$data->jmlh}}
        <hr>
    @endforeach
</body>
</html>
