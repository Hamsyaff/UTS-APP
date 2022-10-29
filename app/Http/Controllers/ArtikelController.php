<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    //
    function berita()
    {
        $data = DB::table('artikel')
            ->get();
        return $data;
    }
    function jenis($jenis){
        $data = DB::table('_jenis_artikel')
            ->join('artikel', 'kode_jenis_artikel', '=', 'kode')
            ->where('jenis', '=', $jenis)
            ->get();
            return $data;
    }
}
