<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanControler extends Controller
{
    public function halo(){
        return "Hai nama saya Raihan";
    }

    public function tambahin($a=0,$b=0){
       if (!$a && !$b) {
           return "Masukan Bilangan dulu  atuhh boss   ";
       }
       if ($a && !$b){
           echo "Bilangan Pertama : ".$a.
           "<br>Masukin satu lagi atuhh boss";
       }
       elseif (isset($a) && isset($b) ){
           $hasil = $a+$b;
        echo $a." + ".$b." = ".$hasil;
       }
    }

    public function kurangin($a=0,$b=0){
       if (!$a && !$b) {
           return "Masukan Bilangan dulu  atuhh boss   ";
       }
       if ($a && !$b){
           echo "Bilangan Pertama : ".$a.
           "<br>Masukin satu lagi atuhh boss";
       }
       elseif (isset($a) && isset($b) ){
           $hasil = $a-$b;
        echo $a." - ".$b." = ".$hasil;
       }
    }

    public function  bagiin($a=0,$b=0){
       if (!$a && !$b) {
           return "Masukan Bilangan dulu  atuhh boss   ";
       }
       if ($a && !$b){
           echo "Bilangan Pertama : ".$a.
           "<br>Masukin satu lagi atuhh boss";
       }
       elseif (isset($a) && isset($b) ){
           $hasil = $a/$b;
        echo $a." / ".$b." = ".$hasil;
       }
    }

    public function kaliin($a=0,$b=0){
       if (!$a && !$b) {
           return "Masukan Bilangan dulu  atuhh boss   ";
       }
       if ($a && !$b){
           echo "Bilangan Pertama : ".$a.
           "<br>Masukin satu lagi atuhh boss";
       }
       elseif (isset($a) && isset($b) ){
           $hasil = $a*$b;
        echo $a." * ".$b." = ".$hasil;
       }
    }

    public function loop(){
        $data = [
            ['nama'=>'raihan','agama'=>'islam','alamat'=>'graha','jk'=>'laki-laki','jabatan'=>'manager',
            'jam kerja'=>255],
            ['nama'=>'alfi','agama'=>'islam','alamat'=>'kopo','jk'=>'laki-laki','jabatan'=>'staff',
            'jam kerja'=>190],
            ['nama'=>'agung','agama'=>'hindu','alamat'=>'kamboja','jk'=>'laki-laki','jabatan'=>'sekertaris',
            'jam kerja'=>249],
            ['nama'=>'lukman','agama'=>'agnostic','alamat'=>'cisirung','jk'=>'laki-laki','jabatan'=>'sekertaris',
            'jam kerja'=>223]
        ];
        foreach ($data as $val=>$key) {
        if ($key['jabatan'] == 'manager') {
            $gajinya = 5000000;
            if ($key['jam kerja']>=250) {
                $jamker = $gajinya*10/100;
            }
            elseif ($key['jam kerja']>=200) {
                $jamker = $gajinya*5/100;
            }
            else {
                $jamker=0;
            }
        }

        elseif ($key['jabatan'] == 'sekertaris') {
            $gajinya = 3500000;
            if ($key['jam kerja']>=250) {
                $jamker = $gajinya*10/100;
            }
            elseif ($key['jam kerja']>=200) {
                $jamker = $gajinya*5/100;
            }
            else {
                $jamker=0;
            }
        }

        elseif ($key['jabatan'] == 'staff') {
            $gajinya = 2500000;
            if ($key['jam kerja']>=250) {
                $jamker = $gajinya*10/100;
            }
            elseif ($key['jam kerja']>=200) {
                $jamker = $gajinya*5/100;
            }
            else {
                $jamker=0;
            }
        }
            $gajibersih =$gajinya+$jamker;
            $potongan = $gajibersih*2.5/100;
            $gajitotal = $gajibersih - $potongan;

    echo         "Nama              : ".$key['nama'].
                 "<br>Agama         : ".$key['agama'].
                 "<br>Alamat        : ".$key['alamat'].
                 "<br>Jenis Kelamin : ".$key['jk'].
                 "<br>Jabatan       : ".$key['jabatan'].
                 "<br>Jam Kerja     : ".$key['jam kerja'].
                 "<br>Potongan      : ".$potongan.
                 "<br>Bonus         : ".$jamker.
                 "<br>Gaji Total    : ".$gajitotal.
                 "<hr>";
        }
    }
}
