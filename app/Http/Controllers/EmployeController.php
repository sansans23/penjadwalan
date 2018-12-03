<?php

namespace App\Http\Controllers;

use App\Sdm;
use App\Job;
use App\User;
use App\HariSdm;
use Auth;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index(){

    	return view('schedule/admin');
    }

    public function profile()
    {
    	$data['user'] = Sdm::where('user_id', Auth::user()->id)
    						->with('job')
    						->with('user')
    						->first();
    	return view('employe.profile', $data);
    }

    public function editProfile()
    {
    	$data['sdm'] = Sdm::where('user_id', Auth::user()->id)
    						->with('job')
    						->with('user')
    						->first();
    	return view('employe.edit-profile', $data);
    }

    public function updateProfile(Request $request)
    {
    	$rules = array(
            'email'      => 'required|email',
            'address' => 'required',
            'password' => 'nullable|string|min:6',
        );

        $this->validate($request, $rules);

        $data['email'] = $request['email'];
        $data['address'] = $request['address'];

        if (isset($request['password']) && !empty($request['password'])) {
            $atr = md5($request['password']);
            $data['password'] = hash('sha256', substr($atr, 0, 1).$request['password'].substr($atr, -1));
        }

    	User::where('id', Auth::user()->id)->update($data);

    	return redirect(route('employe.profile'));
    }

    public function jadwal()
    {
        return view('employe.jadwal');
    }

    public function getCalendar()
    {
    	$sdm = Sdm::where('user_id', Auth::user()->id)->first();
    	$data['jadwal'] = HariSdm::where('id_sdm', $sdm->id)
    				->with('HariKerja')
    				->with('Sdm')
    				->get();
    	$data['jadwal']->transform(function($item, $key){ // 
            $bulan = str_pad($item->harikerja->bulan, 2, 0,STR_PAD_LEFT);
            $tanggal = str_pad($item->harikerja->tanggal, 2, 0,STR_PAD_LEFT);
            $tahun = $item->harikerja->tahun;

            $start = "{$tahun}-{$bulan}-{$tanggal}";
            $color = "blue";
            if (is_null($item->kehadiran)) {
            	if (date("Y-m-d") > date("Y-m-d", strtotime($start))) {
            		$color = "red";
            	}else{
            		$color = "blue";
            	}
            }elseif ($item->kehadiran == 1) {
            	$color = "green";
            }

            return [
                'title' =>  $item->sdm->name,
                'start' =>  $start,
                'rendering' => 'background',
                'color' =>  $color,
            ];        
        });

        return response()->json($data['jadwal']);
    }
}
