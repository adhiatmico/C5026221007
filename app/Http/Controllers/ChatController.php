<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChatController extends Controller
{
	public function index()
	{
        $chat = DB::table('chat')->paginate(15);
		return view('tampilanchat',['chat' => $chat]);

	}

	public function tambah()
	{

		return view('tambahchat');

	}

	// public function store(Request $request)
	// {
	// 	DB::table('kursi')->insert([
	// 		'kodekursi' => $request->kode_kursi,
	// 		'merkkursi' => $request->merk_kursi,
	// 		'stockkursi' => $request->stock_kursi,
	// 		'tersedia' => $request->tersedia
	// 	]);
	// 	return redirect('/kursi');

	// }

	// public function edit($kodekursi)
	// {
	// 	$kursi = DB::table('kursi')->where('kodekursi',$kodekursi)->get();
	// 	return view('editkursi',['kursii' => $kursi]);

	// }

    public function view($id)
	{
		$chat = DB::table('chat')->where('id',$id)->get();
		return view('viewchat',['chat' => $chat]);

	}

    public function explode()
	{
        $chatp = DB::table('pesan')->get();
    	// mengirim data belanja ke view index
        $potong = explode(" ", $chatp);
		return view('tampilanchat',['pesan' => $potong]);

	}


	// public function update(Request $request)
	// {
	// 	DB::table('kursi')->where('kodekursi',$request->kodekursi)->update([
	// 		'merkkursi' => $request->merk_kursi1,
	// 		'stockkursi' => $request->stock_kursi1,
	// 		'tersedia' => $request->ter
	// 	]);
	// 	return redirect('/kursi');
	// }

	// public function hapus($kodekursi)
	// {
	// 	DB::table('kursi')->where('kodekursi',$kodekursi)->delete();

	// 	return redirect('/kursi');
	// }


    public function cari(Request $request)
	{
		$cari = $request->cari;

		$kursi = DB::table('chat')
		->where('id','like',"%".$cari."%")
		->paginate();

		return view('tampilanchat',['chat' => $chat, 'cari' => $cari]);

	}

}

