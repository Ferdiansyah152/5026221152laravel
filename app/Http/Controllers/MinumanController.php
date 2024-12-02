<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MinumanController extends Controller
{
    // Menampilkan daftar minuman
    public function indexminum()
    {
        $minuman = DB::table('minuman')->paginate(10);
        return view('indexminum', ['minuman' => $minuman]);
    }

    // Menampilkan form tambah data minuman
    public function tambah()
    {
        // Memanggil view tambah
        return view('tambahminum');
    }

    // Menyimpan data minuman baru
    public function store(Request $request)
{
    // Debugging: Cek data yang diterima
    logger()->info('Data diterima untuk store:', $request->all());

    // Validasi input
    $request->validate([
        'kodeminuman' => 'required|max:10|unique:minuman',
        'merkminuman' => 'required|max:50',
        'stockminuman' => 'required|integer|min:0',
        'tersedia' => 'required|in:Y,N'
    ]);

    // Menyimpan data ke database
    DB::table('minuman')->insert([
        'kodeminuman' => $request->kodeminuman,
        'merkminuman' => $request->merkminuman,
        'stockminuman' => $request->stockminuman,
        'tersedia' => $request->tersedia
    ]);

    // Debugging: Pastikan data berhasil ditambahkan
    logger()->info('Data berhasil ditambahkan:', [
        'kodeminuman' => $request->kodeminuman
    ]);

    // Redirect ke halaman daftar minuman
    return redirect('/minuman')->with('success', 'Data berhasil ditambahkan!');
}

    // Menampilkan form edit data minuman
    public function edit($id)
    {
        // Mengambil data minuman berdasarkan kode
        $minuman = DB::table('minuman')->where('kodeminuman', '=', $id)->get();

        // Mengirim data minuman ke view edit
        return view('editminum', ['minuman' => $minuman]);
    }

    // Memperbarui data minuman
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'kodeminuman' => 'required|max:10',
            'merkminuman' => 'required|max:50',
            'stockminuman' => 'required|integer|min:0',
            'tersedia' => 'required|in:Y,N'
        ]);

        // Memperbarui data minuman
        DB::table('minuman')->where('kodeminuman', $request->kodeminuman)->update([
            'merkminuman' => $request->merkminuman,
            'stockminuman' => $request->stockminuman,
            'tersedia' => $request->tersedia
        ]);

        // Mengarahkan ke halaman daftar minuman
        return redirect('/minuman')->with('success', 'Data berhasil diperbarui!');

        // Debugging: Tampilkan semua data yang diterima
    logger()->info('Data diterima untuk update:', $request->all());

    // Validasi input
    $request->validate([
        'kodeminuman' => 'required|max:10',
        'merkminuman' => 'required|max:50',
        'stockminuman' => 'required|integer|min:0',
        'tersedia' => 'required|in:Y,N'
    ]);

    // Memperbarui data minuman
    DB::table('minuman')->where('kodeminuman', $request->kodeminuman)->update([
        'merkminuman' => $request->merkminuman,
        'stockminuman' => $request->stockminuman,
        'tersedia' => $request->tersedia
    ]);

    // Debugging: Tampilkan pesan sukses
    logger()->info('Data berhasil diperbarui untuk kodeminuman:', ['kodeminuman' => $request->kodeminuman]);

    return redirect('/minuman')->with('success', 'Data berhasil diperbarui!');
}

    // Menghapus data minuman
    public function hapus($id)
    {
        // Menghapus data minuman berdasarkan kode
        DB::table('minuman')->where('kodeminuman', $id)->delete();

        // Mengarahkan ke halaman daftar minuman
        return redirect('/minuman')->with('success', 'Data berhasil dihapus!');
    }

    // Mengubah status "tersedia"
    public function ubahTersedia(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'tersedia' => 'required|in:Y,N'
        ]);

        DB::table('minuman')
            ->where('kodeminuman', $id)
            ->update(['tersedia' => $request->tersedia]);

        return response()->json(['success' => true, 'message' => 'Status tersedia berhasil diubah!']);
    }

    public function cari(Request $request)
{
    // Ambil input pencarian
    $cari = $request->input('cari');

    // Query data minuman berdasarkan merk minuman
    $minuman = DB::table('minuman')
        ->where('merkminuman', 'like', '%' . $cari . '%')
        ->paginate(10);

    // Kirim data ke view
    return view('indexminum', ['minuman' => $minuman]);
}

}
