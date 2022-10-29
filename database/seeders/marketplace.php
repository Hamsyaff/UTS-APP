<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class marketplace extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marketplace')->insert([
            [
                'Merk' => 'Cotton Combad 30s',
                'Size' => 'M/L/XL',
                'Harga' => '1000000',
                'Deskripsi' => 'Tersedia baju polos model kekinian',
                'gambar' => 'combad.jpg'
            ],
            [
                'Merk' => 'Jacket Parka',
                'Size' => 'M/L/XL',
                'Harga' => '2000000',
                'Deskripsi' => 'Jaket parka dengan style terbaru',
                'gambar' => 'jaket.jpg'
            ],
            [
                'Merk' => 'Chino Pants',
                'Size' => 'M/L/XL',
                'Harga' => '99000',
                'Deskripsi' => 'Celana chino dengan model slimfit',
                'gambar' => 'chino.jpg'
            ]
        ]);
    }
}
