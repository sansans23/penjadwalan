<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gaji;
use App\Sdm;
use App\Hari_kerja;
use App\Content;
use phpseclib\Crypt\AES;
use phpseclib\Crypt\Random;

class GajiController extends Controller
{
    protected $gajiPerHari = 0;
    protected $hariKerja = array();

    public function index()
    {

        $gajiDB = Content::where('key', 'gaji_perhari')->first();

        $this->gajiPerHari = intval($gajiDB->value);

        $aes = new AES();
        $aes->setKeyLength(256);

    	$data = [];
        $data['encrypt_status'] = false;
        $data['gaji_perhari'] = $this->gajiPerHari;
    	if(isset($_GET['password']) && isset($_GET['bulan']) && isset($_GET['pekerjaan'])) {

            $bulan = explode('-', $_GET['bulan']);
            
            $data['bulan'] = $this->tanggal_indo($_GET['bulan']);

            $aes->setKey($_GET['password']);
    		// CEK DATABASE GAJI BERDASARKAN BULAN & TAHUN
    		$data['gajis'] = Gaji::leftJoin('sdms', 'gajis.sdm_id', 'sdms.id')
                            ->where('month_payment', $_GET['bulan'])
    						->where('sdms.pekerjaan_id', $_GET['pekerjaan'])->get();

            if ($data['gajis']->count() > 0) {
                //dd('cek');
                foreach ($data['gajis'] as $key => $row) {
                    $data['gajis'][$key]->payment = $aes->decrypt(base64_decode($row->payment));
                    if ($data['gajis'][$key]->payment) {
                        $data['encrypt_status'] = true;
                    }
                }
            }else{

                $this->hariKerja = Hari_kerja::where('bulan', $bulan[0])
                                        ->where('tahun', $bulan[1])
                                        ->pluck('id')
                                        ->toArray();
                
                //dd($hariKerja);

                $kehadirans = Sdm::withCount(['Hari_sdm'  => function($q) {
                                $q->where('kehadiran', '=', 1)->whereIn('id_hari_kerja',$this->hariKerja); // '=' is optional
                            }])
                            ->get();
                
                foreach ($kehadirans as $key => $kehadiran) {
                    $aes = new AES();
                    $aes->setKeyLength(256);
                    $aes->setKey($_GET['password']);
                    

                    $gajiNew = new Gaji();
                    $gajiNew->sdm_id = $kehadiran->id;
                    $gajiNew->month_payment = $_GET['bulan'];

                    $encryptedGaji = base64_encode($aes->encrypt(strval($kehadiran->hari_sdm_count * $this->gajiPerHari)));

                    $gajiNew->payment = $encryptedGaji;
                    $gajiNew->save();
                }

                $data['gajis'] = Gaji::leftJoin('sdms', 'gajis.sdm_id', 'sdms.id')
                                        ->where('month_payment', $_GET['bulan'])
                                        ->where('sdms.pekerjaan_id', $_GET['pekerjaan'])->get();
                foreach ($data['gajis'] as $key => $row) {
                    $data['gajis'][$key]->payment = $aes->decrypt(base64_decode($row->payment));
                    if ($data['gajis'][$key]->payment) {
                        $data['encrypt_status'] = true;
                    }
                }
            }

    		$data['show_data']	= true;
    	}

        //dd($data);

    	return view ('gaji.index',$data);
    }

    public function generateGaji($month)
    {
        # code...
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

    public static function tanggal_indo($bulan_tahun)
    {
        $bulan = array (1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
        );
        
        $split = explode('-', $bulan_tahun);

        return $bulan[ (int)$split[0] ].' '.$split[1];
    }
    
}
