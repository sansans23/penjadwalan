<?php

namespace App\Http\Controllers;
Use App\User;
use App\Biodata;
Use App\Role;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        // $data["user"] = User::with('biodata')->get();
    	return view('admin/admin');
     }

    // public function index(){
    // $data['user']=Role::join('user','roles.id','=','users.role_id')->get();
    // return view('admin.index'$data);
    // }
    // public function edit(Request $request){
    // 	$data['role']=Role::get();
    // 	$data['user']=User::where('id',$request['
    // 	id'])->first();
    // 	return view('admin.edit'.$data);
    // }
    // public function delete(Request $request){
    // 	User::where('id',$request['id'])->delete();
    // 	return redirect('staff');
    // }
    public function create(){
    	$data['role'] = Role::get();
    	return view('admin.create');
    }

    public function store(Request $request){
        // dd($request);
        $db["user"] = User::create([
            "role_id" => 2,
            "name" => $request["name"],
            "email" => $request["email"],
            "password" => bcrypt($request["password"]),
            "birth" => $request["birth"],
            "address" => $request["address"],
            "gender" => $request["gender"]
        ]);

        return redirect('admin/staff');
    }

    public function delete(Request $request){
        // dd($request);
        $db["user"] = User::where('id',$request["id"])->delete();

        return redirect('admin/staff');
    }

    public function edit(Request $request){
        $data["user"] = User::where('id',$request["id"])->first();

        return view('admin.edit',$data);
    }

    public function update(Request $request){
        $db["user"] = User::where('id',$request["id"])->update([
            "name"=> $request["name"],
            "email" => $request["email"],
            "password" => bcrypt($request["password"]),
            "birth" => $request["birth"],
            "address" => $request["address"],
            "gender" => $request["gender"]

        ]);

        return redirect('admin/staff');
    }

    public function show(Request $request){
        // dd($request);
        $data["user"] = User::where('id',$request["id"])->first();

        return view('admin.show',$data);
    }
       

}
