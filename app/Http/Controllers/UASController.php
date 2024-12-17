<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UASController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get();
        $karyawan1 = DB::table('karyawan1')->paginate(10);

    	// mengirim data pegawai ke view index
        return view('indexUAS', ['karyawan1' => $karyawan1]);
    	//return view ('index',[' pegawai' => $pegawai]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

	    // memanggil view tambah
	    return view('tambah');

    }

    public function store(Request $request)
    {
	    // insert data ke table pegawai
	    DB::table('karyawan1')->insert([
		    'NIP' => $request->NIP,
		    'Nama' => $request->Nama,
		    'Pangkat' => $request->Pangkat,
		    'Gaji' => $request->Gaji
	    ]);
	        // alihkan halaman ke halaman pegawai
	        return redirect('/UAS');

    }

        // method untuk edit data pegawai
        public function edit($id)
    {
	        // mengambil data pegawai berdasarkan id yang dipilih (PENTING))
            //SELECT*FROM pegawai where pegawai_id = x
	        $karyawan1 = DB::table('karyawan1')->where('NIP', '=', $id)->first();
	        // passing data pegawai yang didapat ke view edit.blade.php
	        return view('editUAS',['karyawan1' => $karyawan1]);

    }

        // update data pegawai
        public function update(Request $request)
    {
	        // update data pegawai
	        DB::table('karyawan1')->where('NIP',$request->NIP)->update([
		        'Nama' => $request->Nama,
		        'Pangkat' => $request->Pangkat,
		        'Gaji' => $request->Gaji
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/UAS');
    }

        // method untuk hapus data pegawai
        public function hapus($id)
    {
	        // menghapus data pegawai berdasarkan id yang dipilih
	        DB::table('karyawan1')->where('NIP',$id)->delete();

	        // alihkan halaman ke halaman pegawai
	        return redirect('/UAS');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('karyawan1')
		->where('Nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexUAS',['karyawan1' => $karyawan1]);

	}
}
