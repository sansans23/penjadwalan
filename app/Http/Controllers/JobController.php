<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{

    // FUNGSI MENAMPILKAN DATA PEKERJAAN
    public function index(){

        // AMBIL DATA PEKERJAAN DI DATABASE
    	$data['job']=Job::all();

        // LOAD VIEW DAFTAR PEKERJAAN
    	return view ('jobdes.job',$data);
    }

    // FUNGSI MENYIMPAN PEKERJAAN KE DATABASE
    public function store(Request $request){
    	
        // MASS ASSIGNMENT	
    	$db["job"] = Job::create([
    		"name" => $request["name"]
    	]);
    	
        // REDIRECT KEMBALI KE HALAMAN DAFTAR PEKERJAAN
    	return redirect('admin/job');
    }

    public function delete(Request $request)
    {
        // dd($request);
        Job::where('id',$request["id"])->delete();

        return redirect('admin/job');
    }


    public function edit(Request $request){
        $data["job"] = Job::where('id',$request["id"])->first();

        return view('Jobdes.edit',$data);
    }

    public function update(Request $request){
        $db["job"] = Job::where('id',$request["id"])->update([
            "name"=>$request["name"]
        ]);

        return redirect('admin/job');
    }
}
