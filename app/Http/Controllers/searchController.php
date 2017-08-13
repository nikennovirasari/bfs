<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peraturan;
use App\Jenis;

class searchController extends Controller
{
	public function awal(){
		
		$semuaPeraturan = Peraturan::all();
		return view('search', compact('semuaPeraturan'));
		
	}

	public function search(Request $request)
	{
		// $semuaPeraturan = Peraturan::where('isi_aturan','like','%'.$request->search.'%')
		// ->orderBy('id')
		// ->paginate(20);

		// return view('search',compact('semuaPeraturan'));
		
		$semuaPeraturan = Peraturan::where('isi_aturan','like','%'.$request->search.'%')
		->orderBy('id')
		->paginate(20);
		
		$semuaJenis= new Jenis;
		

		include 'bfs.php';
		
		

		$graph = [
		'SYSTEM' => ['Peraturan BKN','Peraturan BPS'],
		'Peraturan BPS' => ['SYSTEM', 'Peraturan Kepala Badan Kepegawaian Negara No. 3 Tahun 2013 Tanggal 21 Januari 2013'],
		'Peraturan Kepala Badan Kepegawaian Negara No. 3 Tahun 2013 Tanggal 21 Januari 2013' => ['A'],
		'Peraturan BKN' => ['SYSTEM',],
		];
	

// initial untuk mulai (data antrian, simpul root/start, tujuan)
		print_r(bfs_path($graph, 'SYSTEM', 'Peraturan Kepala Badan Kepegawaian Negara No. 3 Tahun 2013 Tanggal 21 Januari 2013'));
		
		return view('search', compact('semuaPeraturan'));
	}
}
