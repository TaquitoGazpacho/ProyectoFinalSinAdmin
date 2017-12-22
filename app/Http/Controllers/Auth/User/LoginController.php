<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
    protected $redirectTo = '';

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

        $this->validate($request, [
            'email' => 'required|min:1',
            'password' => 'required|min:6',
            //'g-recaptcha-response' => 'required|recaptcha',
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
            //'verified' => true,
        ];

        // Attempt to log the user in
        //if (Auth::attempt($credential, $request->member)){
        Auth::attempt($credential, $request->member);
        if(Auth::check() && Auth::user()->verified) {
            return redirect()->intended(route('home'));
        } elseif (Auth::check()) {
            Auth::logout();
            alert()->flash('Email no verificado', 'warning', [
                    'text' => 'Tendrás un email de verificación en tu correo'
            ]);
            return redirect()->back()->withInput();
        }
        return $this->sendFailedLoginResponse($request);
        //}
        //return redirect()->back()->withInput($request->only('email', 'remember'));


        // If Unsuccessful, then redirect back to the login with the form data
        //return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
