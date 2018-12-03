<?php

namespace App\Http\Controllers;
Use App\User;
use App\Biodata;
Use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $atr = md5($request->password);

        $user = new User;
        $user->role_id = 1;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash('sha256', substr($atr, 0, 1).$request->password.substr($atr, -1));
        $user->birth = $request->birth;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->photo = "0";
        // terusin
        $user->save();

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
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'address' => 'required',
            'gender' => 'required',
            'birth' => 'required',
            'password' => 'nullable|string|min:6',
        );

        $this->validate($request, $rules);

        $data['email'] = $request['email'];
        $data['address'] = $request['address'];
        $data['gender'] = $request['gender'];
        $data['birth'] = $request['birth'];

        if (isset($request['password']) && !empty($request['password'])) {
            $atr = md5($request['password']);
            $data['password'] = hash('sha256', substr($atr, 0, 1).$request['password'].substr($atr, -1));
        }

        User::where('id', $request['id'])->update($data);

        return redirect('admin/staff');
    }

    public function show(Request $request){
        // dd($request);
        $data["user"] = User::where('id',$request["id"])->first();

        return view('admin.show',$data);
    }
       

}
