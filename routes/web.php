<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('profil/nama', function(){
    return "Nama    : Raihan Fadzan Aldy";
});

Route::get('profil/kelas', function(){
    return "Kelas    : XI Rpl 1";
});

Route::get('profil/agama', function(){
    return "agama    : Islam";
});

Route::get('profil/alamat', function(){
    return "Alamat    : Graha Rancamanyar";
});

Route::get('profil/hobby', function(){
    return "Hobby    : Tidur";
});

//Route Parameter
Route::get('biodata/{nama}/{kelas}/{agama}/{alamat}/{hobby}', function($a,$b,$c,$d,$e){
    return '<h1><center>Biodata</center></h1> <br>
            Nama  &nbsp&nbsp: '.$a.' <br>
            Kelas &nbsp&nbsp&nbsp: '.$b.' <br>
            Agama  : '.$c.' <br>
            Alamat : '.$d.' <br>
            Hobby &nbsp: '.$e;
});
