<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sdm;
use App\Job;
use App\User;

class SDMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sdms'] = Sdm::with('job')->with('user')->get();
        //dd($data);
        return view('SDM.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // AMBIL PEKERJAAN TARUH DI $pekerjaan
        $data['job']=Job::all();

        // TARUH $pekerjaan DI SINI 
        return view('SDM.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $atr = md5($request->password);

        $user = new User;
        $user->role_id = 2;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash('sha256', substr($atr, 0, 1).$request->password.substr($atr, -1));
        $user->birth = $request->birth;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->photo = "0";
        // terusin
        $user->save();

        $sdm = new Sdm;
        $sdm->user_id = $user->id;
        $sdm->name = $user->name;
        $sdm->pekerjaan_id = $request->pekerjaan_id;
        $sdm->kelompok_hari = $request->kelompok_hari;
        // terusin
        $sdm->save();

        return redirect(route('sdm.index'));
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['sdm']=Sdm::where('id',$id)->first();

        return view('SDM.detail',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data["sdm"]=Sdm::leftJoin('users', 'sdms.user_id', 'users.id')
                        ->where('sdms.id',$id)
                        ->first([
                            'sdms.*',
                            'users.email',
                            'users.birth',
                            'users.address',
                            'users.gender'
                        ]);
        $data['job']=Job::all();
        return view('SDM.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'pekerjaan_id' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'birth' => 'required',
            'password' => 'nullable|string|min:6',
        );

        $this->validate($request, $rules);

        $db["sdm"]=Sdm::where('id',$request["id"])->update([
            "name"=>$request["name"],
            "pekerjaan_id"=>$request["pekerjaan_id"]
        ]);

        $sdm = Sdm::find($request['id']);

        $data['email'] = $request['email'];
        $data['address'] = $request['address'];
        $data['gender'] = $request['gender'];
        $data['birth'] = $request['birth'];

        if (isset($request['password']) && !empty($request['password'])) {
            $atr = md5($request['password']);
            $data['password'] = hash('sha256', substr($atr, 0, 1).$request['password'].substr($atr, -1));
        }

        User::where('id', $sdm->user_id)->update($data);
        
        return redirect('admin/sdm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sdm = Sdm::find($id);
        User::where('id', $sdm->user_id)->delete();
        $result = Sdm::destroy($id);
        if($result) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }

    }

}
