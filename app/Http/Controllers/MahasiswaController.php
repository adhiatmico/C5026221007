<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $nilaikuliah = DB::table('nilaikuliah')->paginate(15);
    	// mengirim data pegawai ke view index
		return view('latlak',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah2');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
            'ID' => $request->ID,
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}

	// method untuk edit data pegawai
	public function edit($ID)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('nilaikuliah')->where('ID',$ID)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['nilaikuliah' => $nilaikuliah]);

	}

    //method untuk view data pegawai
    public function view($ID)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('nilaikuliah')->where('ID',$ID)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('view',['nilaikuliah' => $nilaikuliah]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('nilaikuliah')->where('ID',$request->ID)->update([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/latlak');
	}

	// method untuk hapus data pegawai
	public function hapus($ID)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('nilaikuliah')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/latlak');
	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$nilaikuliah = DB::table('nilaikuliah')
		->where('ID','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index',['nilaikuliah' => $nilaikuliah, 'cari' => $cari]);

	}

}

