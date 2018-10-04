<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hari_kerja;
use App\Hari_sdm;
use App\User;
use App\Sdm;


class KehadiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        // echo $_GET['tanggal'];
        $data = [];
        if(isset($_GET['tanggal'])) {
            $tanggal_dicari = $_GET['tanggal'];
            $hari_kerja = Hari_kerja::where('tanggal',date('d',strtotime($tanggal_dicari)))
                                    ->where('bulan',date('m',strtotime($tanggal_dicari)))
                                    ->where('tahun',date('Y',strtotime($tanggal_dicari)))
                                    ->with('HariSdm.Sdm')
                                    ->first();
            $data['karyawan']  = $hari_kerja->HariSdm;

            $data['show_data'] = true;
        }
        // dd($data['karyawan']);
        // foreach ($hari_kerja->HariSdm as $harisdm) {
        //     dd($harisdm);
        // }
        // dd($data);
        return view('kehadiran.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    // {
    //     $data['hari_sdms']=Hari_sdm::with('sdm')->with('user')->get();

    //     return view('kehadiran.show',$data);
    // }
    {
        // $data['user']=User::with('sdm')->with('hari_sdm')->get();

        // return view('kehadiran.show',$data);
        $data['sdms'] = Sdm::withCount(['Hari_sdm'  => function($q) {
                                $q->where('kehadiran', '=', 1); // '=' is optional
                            }])
                            ->get();
        // $count = Hari_sdm::where('kehadiran','=','1')->count();

        return view('kehadiran.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Update(Request $request, $tanggal)
    {
      
        foreach ($request->kehadiran as $key => $value) {
            $harisdm = Hari_sdm::find($key);
            $harisdm->kehadiran=$value;
            $harisdm->save();
        }
        return redirect(url("admin/kehadiran?tanggal={$tanggal}"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
