<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class controllerBarang extends Controller
{
    public function index(){
            $barangx = Barang::all();
            return view('tambar',compact('barangx'));
    }

    public function show($id){
        echo "<h3>Bedasarkan ID : $id</h3>";
        $barangx = Barang::find($id);
        return view('barang',compact('barangx'));

    }

}
