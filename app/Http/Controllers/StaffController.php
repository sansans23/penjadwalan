<?php

namespace App\Http\Controllers;
use App\User;
use App\Sdm;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        // $data["user"] = User::with('biodata')->get();
        $data["user"] = User::all();
    	return view('staff.index',$data);
    }
    //  public function index(){
    //  	// return "yey";
    //  	// $data["user"]= User::join('biodata','users.id','=','biodata.user_id')->get();
    //  	$data["user"] = User::with('biodata')->get();
    //  	// dd($data);
    // 	return view('staff.index',$data);
    // }
    // public function show($id){
    // 	$data["biodata"]=Biodata::get();
    // 	// dd($data);
    // 	return view('staff.index',$data);
    // }
}

