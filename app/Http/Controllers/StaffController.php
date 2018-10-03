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

    public function create(){
        $data["user"] = User::all();
        return view('staff.create',$data);
    }

    public function edit(){
        $data["user"] = User::where('id',$id)->first();
        return view('staff.edit',$data);
    }

}

