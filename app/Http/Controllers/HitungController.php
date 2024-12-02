<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HitungController extends Controller
{

    //counter
    public function hitung()
    {
        $pagecounter = DB::table('pagecounter')->get();
        DB::table('pagecounter')->increment('Jumlah');
        return view('hitung',['pagecounter' => $pagecounter]);
    }

}
