<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('artikel')->insert([
            [
                'kode_jenis_artikel' => 'OR',
                'judul' => 'OLAHRAGA',
                'isi' => 'Sepakbola'
            ],
            [
                'kode_jenis_artikel' => 'PL',
                'judul' => 'POLITIK',
                'isi' => 'PEMILU'
            ]
        ]);
    }
}
