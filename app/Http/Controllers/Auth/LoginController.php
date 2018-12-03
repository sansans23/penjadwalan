<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/checking';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $atr = md5($request["password"]);

        # $hasilAtr = "ebca12431524321562ea125aa";
        # $passwordSalt = karakterpertama($hasilAtr)."passworda".karakterterakhir($hasilAtr);
        # $dbPassword = sha256($passwordSalt);

        $user['email'] = $request["email"];
        $user['password'] = substr($atr, 0, 1).$request["password"].substr($atr, -1);

        if (Auth::attempt($user)) {
            return redirect('/checking');
        }else{
            return "<script>window.alert('Email atau Password salah!'); window.location.href = '".route('login')."';</script>";
        }
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        dd($request->input());
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }
}
