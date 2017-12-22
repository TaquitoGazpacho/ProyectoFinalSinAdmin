<?php

namespace App\Http\Controllers\Auth\User;

use App\Jobs\SendVerificationMail;
use App\Models\User;
use App\Models\Suscripcion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
//            'g-recaptcha-response' => 'required|recaptcha',
        ]);
    }


    protected function create(array $data)
    {
        $suscripcion = Suscripcion::where('name', 'Gratis')->value('id');
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'sex' => $data['sex'],
            'password' => bcrypt($data['password']),
            'email_token' => base64_encode($data['email']),
            'suscripcion_id' => $suscripcion,
        ]);
    }

    protected function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        dispatch(new SendVerificationMail($user));

        alert()->flash('Registro casi completado', 'info', [
            'text' => 'Se te ha enviado un email de confirmación para verificar la cuenta'
        ]);

        return redirect()->route('index');
    }

    protected function verify($token)
    {
        $user = User::where('email_token', $token)->first();
        $user->verified = true;
        if ($user->save()){
            return view('verification.emailConfirm', ['user' => $user]);
        }
    }
}