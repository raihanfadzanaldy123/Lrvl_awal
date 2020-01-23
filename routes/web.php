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

Route::get('testmodel/id',function()
    {
        $query = App\Post::all();
        return $query;
    }
);

Route::get('testmodel/title',function()
    {
        $query = App\Post::find(1);
        return $query;
    }
);

Route::get('testmodel/cari',function()
    {
        $query = App\Post::where('title','like','%tips%')->get();
        return $query;
    }
);

Route::get('testmodel/hapus',function()
    {
        $post = App\Post::find(1);
        $post->delete();
    }
);

Route::get('testmodel/tambah',function()
    {
    $post = new App\Post;
$post->title = "7 Amalan Pembuka Jodoh";
$post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
$post->save();
return $post;
    }
);

