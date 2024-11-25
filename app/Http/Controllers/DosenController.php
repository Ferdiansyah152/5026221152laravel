<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
    }

    public function blog(){
        return view('blog');
    }

    public function biodata(){
        $nama = "Ferdiansyah Yusuf Muhammad";
        $umur = 20 ;
        $hasil = 11 + 7 + 9 ;
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata',[
        'nama' => $nama ,
        'umur' => $umur ,
        'hasil' => $hasil,
        'matkul' => $pelajaran,
    ]);
    }
}
