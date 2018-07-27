<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hari_kerja;
use App\Sdm;

class ScheduleController extends Controller
{
     public function index(){
     	$data = [];
     	if(isset($_GET['tahun']) && isset($_GET['bulan']) && isset($_GET['pekerjaan'])){
     		$data['show_data']	= true;
     	}

    	return view('schedule.index',$data);
     }


     public function getPekerjaByHariKerja($data_pekerja,$hari,$jumlah)
     {
     	if($hari == 7) {
     		// GET GROUP JIKA AHAD
     		$group = $data_pekerja->sortBy('durasi_kerja');
     		$hasil = $group->take($jumlah);
     	} else {
     		// GET GROUP JIKA WEEKDAY
    		$group = $data_pekerja->where('kelompok_hari',$hari)->sortBy('durasi_kerja');
    		if($group->count() < $jumlah) {
    			$hasil = collect($group->all());
    			$additional = $data_pekerja->where('kelompok_hari','!=',$hari)
    								->sortBy('durasi_kerja')
    								->take($jumlah-$group->count());
    			$hasil = $hasil->toBase()->merge($additional);
    		} else {
    			$hasil = $group->take($jumlah);
    		}

     	}
     	

     	
     	return $hasil;
     }

    public function getCalendar()
    {
    	if(isset($_GET['tahun']) && isset($_GET['bulan']) && isset($_GET['pekerjaan'])){
    		// GET DATA HARI KERJA
     		$harikerja = Hari_kerja::where("tahun",$_GET['tahun'])
    							->where("bulan",$_GET['bulan'])
    							->where("job_id",$_GET['pekerjaan'])->get()->toArray();

    		// GET DATA PEKERJA
    		$pekerja = Sdm::where("pekerjaan_id",$_GET['pekerjaan'])->get();
    		
    		// #START# DATA POKOK PEKERJA PER HARI ( BENTUKNYA LARAVEL COLLECTION )
    		$data_pekerja = [];
    		foreach ($pekerja as $key => $value) {
    			$temp = $value->toArray();
    			$temp['durasi_kerja'] = 0;
    			$data_pekerja[] = (object) $temp;
    		}
    		$data_pekerja = collect($data_pekerja);
    		// #END# DATA POKOK PEKERJA PER HARI ( BENTUKNYA LARAVEL COLLECTION )
    		
    		// AMBIL BEBERPA PEKERJA DARI DATA POKOK BERDASARKAN HARI KERJA
    		foreach ($harikerja as $key => $value) {
    			$value = (object) $value;
    			$hari = date('N',strtotime($value->tanggal.'-'.$value->bulan.'-'.$value->tahun));

    			// #START# GET RANDOM FROM PEKERJA DENGAN HARI TERTENTU
    			
    			// get pekerja sesuai kuota
    			$harikerja[$key]['pekerja'] = $this->getPekerjaByHariKerja($data_pekerja, $hari, $value->kuota)->toArray();
    			// tambahkan durasi ke masing-masing pekerja
    			foreach ($harikerja[$key]['pekerja'] as $index => $pekerja) {
    				$data_pekerja[$index]->durasi_kerja += 1;
    			}
    			// masukkan data pekerja ke dalam hari kerja

    			// #END# GET RANDOM FROM PEKERJA DENGAN HARI TERTENTU
    		}
    	}

    	$harikerja = collect($harikerja);

    	$harikerja->transform(function ($item,$key){
    		$bulan = str_pad($item['bulan'], 2, 0,STR_PAD_LEFT);
    		$tanggal = str_pad($item['tanggal'], 2, 0,STR_PAD_LEFT);
    		$title = "";
    		foreach ($item['pekerja'] as $pekerja) {
    			$title .= " {$pekerja->name} \n";
    		}
    		return [
    			'id'	=>$key,
    			'title'	=> $title,
    			"start"	=>	"{$item['tahun']}-{$bulan}-{$tanggal}",

    		];
    	});

    	return response()->json($harikerja);
    }

    public function admin(){
    	// $data['schedule']=Order::join('acara','orders.id','=','acara.order_id')->get();
    	return view('schedule.admin');
    }
    // public function staff(){
    // 	// $data['schedule']=Order::join('acara','orders.id','=','acara.order_id')->get();
    //   return view('schedule.staff');
    // }
}
