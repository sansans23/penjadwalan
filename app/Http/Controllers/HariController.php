<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hari_kerja;

class HariController extends Controller
{
    public function index()
    {
    	$data = [];
    	if(isset($_GET['tahun']) && isset($_GET['bulan']) && isset($_GET['pekerjaan'])) {
    		// CEK DATABASE HARI KERJA DENGAN TAHUN DAN BULAN TERSEBUT
    		$harikerja = Hari_kerja::where("tahun",$_GET['tahun'])
    							->where("bulan",$_GET['bulan'])
    							->where("job_id",$_GET['pekerjaan'])->get();
    		// dd($harikerja);

    		if(count($harikerja) == 0) {
    			// BUAT ARRAY KARENA TIDAK ADA DATA DI DATABASE
    			$harikerja = [];
	    		$tanggal_terakhir = date('t',strtotime("{$_GET['tahun']}-{$_GET['bulan']}"));
	    		for ($i = 1; $i <= $tanggal_terakhir; $i++){
	    			$temp = [
	    				'job_id'	=>	$_GET['pekerjaan'],
	    				'tanggal' 	=> 	$i,
	    				'bulan'		=>	$_GET['bulan'],
	    				'tahun'		=>	$_GET['tahun'],
	    				// 'tanggal'	=> 	date('N',strtotime("{$i}-{$_GET['bulan']}-{$_GET['tahun']}")),
	    				'kuota' 	=>	'4'
	    			];
	    			$harikerja[] = $temp;
	    		}

	    		// create data hari kerja ke database
	    		Hari_kerja::insert($harikerja);
	    		$harikerja = Hari_kerja::where("tahun",$_GET['tahun'])
    							->where("bulan",$_GET['bulan'])
    							->where("job_id",$_GET['pekerjaan'])->get();
    		}

    		// TAMPILKAN DENGAN DD($hari_kerja)
    		$data['hari'] = $harikerja;
    		// dd($hari);
    		$data['show_data']	= true;
    	}

    	return view ('harikerja.index',$data);
    }

    public function update(Request $request)
    {
    	// dd($request->all());
    	foreach ($request->kuota as $key => $value) {
    		$harikerja = Hari_kerja::find($key);
	    	$harikerja->kuota = $value;
	    	$harikerja->save();
    	}

    	return redirect(url('admin/harikerja?bulan='.$request->bulan.'&tahun='.$request->tahun.'&pekerjaan='.$request->pekerjaan));
    }

    public function FunctionName($value='')
    {
    	# code...
    }
    
}
