<?php

use Illuminate\Database\Seeder;

class BarangAngsam extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datbar = [
            ['kd_barang'=>22735601, 'nm_barang'=>'Drum Box', 'kategori'=>'Alat Musik',
        'hrg_beli'=>300000, 'hrg_jual'=>450000, 'stok_barang'=>4],
            ['kd_barang'=>22735602, 'nm_barang'=>'Gitar Yamaha', 'kategori'=>'Alat Musik',
        'hrg_beli'=>1000000, 'hrg_jual'=>1200000, 'stok_barang'=>2],
            ['kd_barang'=>22735603, 'nm_barang'=>'ukulele', 'kategori'=>'Alat Musik',
        'hrg_beli'=>250000, 'hrg_jual'=>350000, 'stok_barang'=>4],
            ['kd_barang'=>22735604, 'nm_barang'=>'Baju MotorheaD', 'kategori'=>'Pakaian',
        'hrg_beli'=>125000, 'hrg_jual'=>200000, 'stok_barang'=>6],
            ['kd_barang'=>22735605, 'nm_barang'=>'Topi', 'kategori'=>'pakaian',
        'hrg_beli'=>5000, 'hrg_jual'=>15000, 'stok_barang'=>12],
            ['kd_barang'=>22735606, 'nm_barang'=>'Bass Akustik', 'kategori'=>'Alat Musik',
        'hrg_beli'=>2000000, 'hrg_jual'=>3500000, 'stok_barang'=>1],
            ['kd_barang'=>22735607, 'nm_barang'=>'Drum Pedal', 'kategori'=>'Alat Musik',
        'hrg_beli'=>500000, 'hrg_jual'=>650000, 'stok_barang'=>4],
            ['kd_barang'=>22735608, 'nm_barang'=>'Stick Drum XcY2', 'kategori'=>'Alat Musik',
        'hrg_beli'=>95000, 'hrg_jual'=>135000, 'stok_barang'=>6],
            ['kd_barang'=>22735609, 'nm_barang'=>'Sepatu WordDivision', 'kategori'=>'Pakaian',
        'hrg_beli'=>300000, 'hrg_jual'=>450000, 'stok_barang'=>2],
            ['kd_barang'=>22735610, 'nm_barang'=>'Senar Gitar Fender', 'kategori'=>'Alat Musik',
        'hrg_beli'=>1500, 'hrg_jual'=>5000, 'stok_barang'=>12]
        ];
        DB::table('data_barang')->insert ($datbar);
    }
}
