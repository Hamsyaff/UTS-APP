<?php

namespace App\Http\Controllers;

use App\Models\marketplace as ModelsMarketplace;
use Illuminate\Http\Request;

class marketplace extends Controller
{
    public function daftarBarang()
    {
        $data = [
            'barang' => ModelsMarketplace::all()
        ];
        return view('uts.index', $data);
    }
    public function reviewBarang($id)
    {
        $reviewBarang = ModelsMarketplace::Find($id);
        return view('uts.detail', compact('reviewBarang'));
    }
}
