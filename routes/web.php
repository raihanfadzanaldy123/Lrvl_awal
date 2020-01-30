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
        $query = App\Barang::select('nm_barang','kd_barang','kategori')->get();
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

Route::get('Latihan','LatihanControler@halo');
Route::get('tambah/{a?}/{b?}','LatihanControler@tambahin');
Route::get('kurang/{a?}/{b?}','LatihanControler@kurangin');
Route::get('bagi/{a?}/{b?}','LatihanControler@bagiin');
Route::get('kali/{a?}/{b?}','LatihanControler@kaliin');
Route::get('/data-1','LatihanControler@loop');

// Route TabunganController
Route::get('tabungan','TabunganController@index');
Route::get('tabungan/{id}','TabunganController@show');
Route::get('tabungan-tambah/{nis}/{nama}/{kelas}/{jmlh}','TabunganController@store');
Route::get('tabungan-edit/{id?}/{nis?}/{nama?}/{kelas?}/{jmlh?}','TabunganController@update');
Route::get('tabungan-delete','TabunganController@delete');

// Route CustomerController
Route::get('customer','CustomerController@index');
Route::get('customer-tambah/{code_customer}/{name}/{email}/{country}/{city}/{address}/{contact_number}',
'CustomerController@store');
Route::get('customer-edit/{id}/{code_customer}/{name}/{email}/{country}/{city}/{address}/{contact_number}','CustomerController@update');
Route::get('customer-delete','CustomerController@delete');

// Route Passing data MVC
Route::get('pass','practiceController@pass');
Route::get('passe','practiceController@pass1');
Route::get('passe2','practiceController@pass2');



