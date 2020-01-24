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

//------------_______ZZZ_________------------------

Route::get('data-barang/ambil',function()
    {
        $query = App\Barang::all()->take(3);
        return $query;
    }
);

Route::get('data-barang/select',function()
    {
        $query = App\Barang::select('nm_barang','kd_barang','kategori')->first();
        return $query;
    }
);

Route::get('data-barang/tambah/{kd_barang}/{nm_barang}/{kategori}/{hrg_beli}/{hrg_jual}/{stok_barang}',
        function($kd_barang,$nm_barang,$kategori,$hrg_beli,$hrg_jual,$stok_barang){
            $post = new App\Barang;
            $post->kd_barang = $kd_barang;
            $post->nm_barang = $nm_barang;
            $post->kategori  = $kategori;
            $post->hrg_beli  = $hrg_beli;
            $post->hrg_jual  = $hrg_jual;
            $post->stok_barang  = $stok_barang;
            $post->save();
            return $post;
        }

);
