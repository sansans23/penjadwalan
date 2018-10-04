<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hari_kerja;
use App\Sdm;
use App\HariSdm;

class ScheduleController extends Controller
{
     public function index(){
     	$data = [];
     	if(isset($_GET['tahun']) && isset($_GET['bulan']) && isset($_GET['pekerjaan'])){
     		$data['show_data']	= true;
     	}

    	return view('schedule.index',$data);
     }

    public function getCalendar()
    {
        if(empty($_GET['tahun']) || empty($_GET['bulan']) || empty($_GET['pekerjaan']))
            return response()->json([]);

        // CEK JADWAL UNTUK TAHUN DAN BULAN YANG DIINGINKAN
        $cekJadwal = HariSdm::whereHas('HariKerja',function($query){
                        $query->where("bulan",$_GET['bulan'])->where("tahun",$_GET['tahun']);
                    })
                    ->with('HariKerja')
                    ->with('Sdm')
                    ->get();
        
        if(count($cekJadwal) > 1) {
            // apabila jadwal sudah terbuat sebelumnya

            $cekJadwal->transform(function($item,$key){
                $bulan = str_pad($item->harikerja->bulan, 2, 0,STR_PAD_LEFT);
                $tanggal = str_pad($item->harikerja->tanggal, 2, 0,STR_PAD_LEFT);
                $tahun = $item->harikerja->tahun;

                $start = "{$tahun}-{$bulan}-{$tanggal}";
                return [
                    'id'    =>  $item->id,
                    'title' =>  $item->sdm->name,
                    'start' =>  $start,
                    'color' =>  'blue',
                ];        
            });

            return response()->json($cekJadwal);


        } else
        {
            // apabila jadwal belum ada

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

            $harikerja = collect($harikerja);

            $insert_data = [];
            foreach ($harikerja as $hari) {
                foreach ($hari['pekerja'] as $karyawan) {
                    $insert_data[] = ['id_hari_kerja'=>$hari['id'],'id_sdm'=>$karyawan->id];
                }
            }

            // HariSdm::insert($insert_data);
            $jadwal = [];

            foreach ($harikerja as $key => $item) {
                $bulan = str_pad($item['bulan'], 2, 0,STR_PAD_LEFT);
                $tanggal = str_pad($item['tanggal'], 2, 0,STR_PAD_LEFT);
                $hari = date('N',strtotime($item['tanggal'].'-'.$item['bulan'].'-'.$item['tahun']));
                $start = "{$item['tahun']}-{$bulan}-{$tanggal}";
                $title="";
                $yang_bekerja = [];
                foreach ($item['pekerja'] as $pekerja) {
                    $title .= " {$pekerja->name} \n";
                    $yang_bekerja[] = $pekerja->name;
                }

                // cari yang tidak kerja
                if ($hari != 7) {
                    $menganggur = $this->getMenganggurByHariKerja($data_pekerja,$hari,$yang_bekerja);
                    $title_nganggur = "";
                    foreach ($menganggur as $key2 => $pekerja2) {
                        $title_nganggur .= $pekerja2->name." \n";
                    }

                    if(count($menganggur) > 0) {
                        $jadwal[] = [
                                'id'    =>  0,
                                'title' =>  $title_nganggur,
                                'start' =>  $start,
                                'color' =>  'red'
                            ];
                    }
                }

                $jadwal[] = [
                    'id'    =>$key,
                    'title' => $title,
                    "start" =>  $start,
                    "color" =>  "blue"
                ];

            }

            
        }

    	return response()->json($jadwal);
    }

    public function admin(){
    	// $data['schedule']=Order::join('acara','orders.id','=','acara.order_id')->get();
    	return view('schedule.admin');
    }

    public function getMenganggurByHariKerja($data_pekerja,$hari,$yang_bekerja) 
    {
        // $yang_bekerja = collect($yang_bekerja);

        // GET GROUP JIKA WEEKDAY
        

        $menganggur = $data_pekerja->whereNotIn('name',$yang_bekerja)->filter(function($value,$key) use ($hari,$yang_bekerja){
            
            if($value->kelompok_hari == $hari){
                return true;
            } 

        });

        return $menganggur;
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
}
