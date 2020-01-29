<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class TabunganController extends Controller
{
    public function index(){
    $tabungan = Tabungan::all();
    return $tabungan;
    }

    public function show($id){
        $tabungan = Tabungan::find($id);
        return $tabungan;
    }

    public function store($nisnya,$namanya,$kelasnya,$jmlh){
        $tabungan = new Tabungan();
        $tabungan->nis      = $nisnya;
        $tabungan->nama     = $namanya;
        $tabungan->kelas    = $kelasnya;
        $tabungan->jmlh      =$jmlh;
        $tabungan->save();
        return $tabungan;
    }

    public function update($id,$nisnya,$namanya,$kelasnya,$jmlh){
        $tabungan = Tabungan::find($id);
        $tabungan->nis      = $nisnya;
        $tabungan->nama     = $namanya;
        $tabungan->kelas    = $kelasnya;
        $tabungan->jmlh      =$jmlh;
        $tabungan->save();
        return $tabungan;
    }


    public function delete($id){
        $tabungan = Tabungan::find($id);
        $tabungan->delete();
    }
}
