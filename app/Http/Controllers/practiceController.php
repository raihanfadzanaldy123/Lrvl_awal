<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class practiceController extends Controller
{
    public function pass(){
        $data = "Lukman Okto Maniani";
        return view('latihan',compact('data'));
    }

    public function pass1(){
        $siswa = [
        ['nama'=>'kasmana','kelas'=>'10 Rpl'],
        ['nama'=>'mambisu','kelas'=>'11 TKR'],
        ];
    return view('latihan1',['data'=>$siswa]);
    }

    public function pass2(){
        $tabungan = Tabungan::all()->take(10);
        return view('latihan2',compact('tabungan'));
    }

    public function pass3($id){
        $tabungan = Tabungan::findOrFail($id);
        return view('latihan3',compact('tabungan'));
    }
}
