<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
            ['nama'=>'Raihan Fadzan Aldy', 'nis'=>'0021', 'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Graha Ranca Manyar', 'tgl_lahir'=>'2002-12-26', 'umur'=>17],
            ['nama'=>'luukman Berangkuy', 'nis'=>'0022', 'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Bojong Tanjung', 'tgl_lahir'=>'2003-11-10', 'umur'=>16],
            ['nama'=>'Agung Cucumber', 'nis'=>'0023', 'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Bojong Tanjung', 'tgl_lahir'=>'2003-10-05', 'umur'=>15]
        ];
        DB::table('siswa')->insert ($siswa);
    }
}
