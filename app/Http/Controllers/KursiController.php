<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KursiController extends Controller
{
	public function index()
	{
        $kursi = DB::table('kursi')->paginate(15);
		return view('tampilankursi',['kursi' => $kursi]);

	}

	public function tambah()
	{

		return view('tambahkursi');

	}

	public function store(Request $request)
	{
		DB::table('kursi')->insert([
			'kodekursi' => $request->kode_kursi,
			'merkkursi' => $request->merk_kursi,
			'stockkursi' => $request->stock_kursi,
			'tersedia' => $request->tersedia
		]);
		return redirect('/kursi');

	}

	public function edit($kodekursi)
	{
		$kursi = DB::table('kursi')->where('kodekursi',$kodekursi)->get();
		return view('editkursi',['kursi' => $kursi]);

	}

    public function view($kodekursi)
	{
		$kursi = DB::table('kursi')->where('kodekursi',$kodekursi)->get();
		return view('viewkursi',['kursi' => $kursi]);

	}

	public function update(Request $request)
	{
		DB::table('kursi')->where('kodekursi',$request->kodekursi)->update([
			'merkkursi' => $request->merk_kursi1,
			'stockkursi' => $request->stock_kursi1,
			'tersedia' => $request->ter
		]);
		return redirect('/kursi');
	}

	public function hapus($kodekursi)
	{
		DB::table('kursi')->where('kodekursi',$kodekursi)->delete();

		return redirect('/kursi');
	}

    
    public function cari(Request $request)
	{
		$cari = $request->cari;

		$kursi = DB::table('kursi')
		->where('merkkursi','like',"%".$cari."%")
		->paginate();

		return view('tampilankursi',['kursi' => $kursi, 'cari' => $cari]);

	}

}

