<?php

namespace App\Http\Controllers\Auth;

<<<<<<< HEAD
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
=======
use App\Empresa;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
>>>>>>> 1a05baaae7327436962a6791d17584cfae3193aa

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

<<<<<<< HEAD
    use RegistersUsers;
=======
    //use RegistersUsers;
>>>>>>> 1a05baaae7327436962a6791d17584cfae3193aa

    /**
     * Where to redirect users after login / registration.
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
<<<<<<< HEAD
     */
=======
     
>>>>>>> 1a05baaae7327436962a6791d17584cfae3193aa
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
<<<<<<< HEAD
    }
=======
    }*/
>>>>>>> 1a05baaae7327436962a6791d17584cfae3193aa

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
<<<<<<< HEAD
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
=======
    protected function create(Request $data)
    {
        Empresa::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'cnpj' => $data['cnpj'],
            'nivel' => 3,
            'telefone' => $data['telefone'],
            'password' => $data['password'],
        ]);

        return redirect()->route('/');
>>>>>>> 1a05baaae7327436962a6791d17584cfae3193aa
    }
}
